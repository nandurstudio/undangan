<?php
// Simple auth config for local/landing protection
// Behaviour:
// - Prefer values from `.env` if present (KKMRAT_AUTH_USERNAME, KKMRAT_AUTH_PASSWORD_HASH)
// - Fallback to the local defaults below for compatibility

$env = [];
$envFile = __DIR__ . '/..' . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        [$k, $v] = array_map('trim', explode('=', $line, 2) + [1 => '']);
        if ($k !== '') $env[$k] = trim($v, "\"'");
    }
}

// Defaults (safe fallback for local dev)
$defaultUsername = 'admin';
// If no hashed password provided via .env, keep the previous plaintext for compatibility (will be migrated to hashed storage).
$defaultPasswordHash = '$2y$10$Hh69s8Et59GyXRWPLrG2zOd02peQNCYoN34W3KIzeeUniIGGrWNom';

return [
    'enabled' => true,
    'username' => $env['KKMRAT_AUTH_USERNAME'] ?? $defaultUsername,
    'password_hash' => $env['KKMRAT_AUTH_PASSWORD_HASH'] ?? $defaultPasswordHash,
    // session timeout in seconds (30 minutes)
    'timeout' => 1800,
    // remember-me cookie lifetime (7 days)
    'remember_me_lifetime' => 604800,
];
