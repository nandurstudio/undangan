<?php
// Konfigurasi dasar untuk koneksi database
// Production: wajib ambil dari environment (.env / server env).
// Local/dev: gunakan fallback agar mudah dijalankan di mesin developer.
$localDev = (php_sapi_name() === 'cli')
    || (isset($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false || preg_match('/\.local$/', $_SERVER['HTTP_HOST'])));

// Helper: ambil env; jika tidak ada, fallback hanya di localDev, otherwise throw
if (!function_exists('env_required_or_local_fallback')) {
    function env_required_or_local_fallback(string $key, $fallbackWhenLocal = null) {
        $val = getenv($key);
        if ($val !== false) return $val;
        global $localDev;
        if ($localDev) return $fallbackWhenLocal;
        throw new RuntimeException("Missing required environment variable: $key");
    }
}

// Ambil konfigurasi (production = strict, local = permissive)
$servername = env_required_or_local_fallback('DB_HOST', 'localhost');
$username   = env_required_or_local_fallback('KKMRAT_DB_USER', 'kkmrat_user');
// Password boleh kosong intentionally; jika tidak diset di production -> error
$password_env = getenv('KKMRAT_DB_PASS');
if ($password_env === false) {
    if ($localDev) {
        $password = '';
    } else {
        throw new RuntimeException('Missing required environment variable: KKMRAT_DB_PASS');
    }
} else {
    $password = $password_env;
}
$dbname     = env_required_or_local_fallback('KKMRAT_DB_NAME', 'db_undangan_rat');

// Aktifkan mysqli exceptions agar error lebih mudah ditangani
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Procedural connection (backward compatible)
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        throw new Exception('MySQL connection failed: ' . mysqli_connect_error());
    }

    // Pastikan charset utf8mb4
    if (!mysqli_set_charset($conn, 'utf8mb4')) {
        error_log('Warning: could not set mysqli charset to utf8mb4');
    }

    // Objektif mysqli (beberapa file menggunakan $db1)
    $db1 = new mysqli($servername, $username, $password, $dbname);
    $db1->set_charset('utf8mb4');

    // Backward-compatible alias jika kode lama mengandalkan $db
    $db = $conn;
} catch (Exception $e) {
    // Log detail untuk diagnosis (do NOT expose to public)
    error_log('Database connection error: ' . $e->getMessage());

    // In development / CLI rethrow so developers see the stacktrace
    if ($localDev || php_sapi_name() === 'cli') {
        throw $e;
    }

    // Production: friendly HTML page + reference code (no sensitive details exposed)
    $ref = substr(sha1($e->getMessage() . microtime(true)), 0, 8);
    error_log("DB error ref: $ref - " . $e->getMessage());

    http_response_code(503);
    header('Retry-After: 30');
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Service temporarily unavailable</title>';
    echo '<meta name="viewport" content="width=device-width,initial-scale=1"></head><body style="font-family:Arial,Helvetica,sans-serif;color:#333;padding:2rem;">';
    echo '<h1>Service temporarily unavailable</h1>';
    echo '<p>We\'re having trouble connecting to the database. Please try again in a few minutes.</p>';
    echo "<p>If the problem persists, contact <a href=\"mailto:founder@nandurstudio.com\">support</a> and quote reference <strong>$ref</strong>.</p>";
    echo '</body></html>';
    exit;
}
