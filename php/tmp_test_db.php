<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $c = mysqli_connect('localhost','kkmrat_user','','db_undangan_rat');
    echo 'CONNECT_OK';
    mysqli_close($c);
} catch (Exception $e) {
    // If local dev, print details. In production show friendly page + reference code.
    $localDev = (php_sapi_name() === 'cli') || (isset($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false || preg_match('/\.local$/', $_SERVER['HTTP_HOST'])));
    if ($localDev) {
        echo 'CONNECT_ERR: ' . $e->getMessage();
        exit;
    }

    $ref = substr(sha1($e->getMessage() . microtime(true)), 0, 8);
    error_log("tmp_test_db.php DB error ref: $ref - " . $e->getMessage());
    http_response_code(503);
    header('Retry-After: 30');
    echo "<html><head><title>Service unavailable</title></head><body><h1>Service temporarily unavailable</h1><p>Database unavailable. Reference: <strong>$ref</strong></p></body></html>";
    exit;
}
