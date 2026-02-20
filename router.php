<?php
// Router for PHP built-in server — maps friendly URLs to /php/*.php when file exists there.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requested = realpath(__DIR__ . $uri);

// Special-case favicon for local built-in server — serve actual image so browsers get correct Content-Type
if ($uri === '/favicon.ico') {
    $f = __DIR__ . '/images/rat/favicon_io/favicon.ico';
    if (file_exists($f)) {
        header('Content-Type: image/x-icon');
        readfile($f);
        return true;
    }
}

// Serve the requested resource if it is a real file
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // let the built-in server serve the file
}

// If request is a single-segment with trailing slash and a php target exists, redirect to no-slash canonical URL
if (preg_match('#^/([^/]+)/$#', $uri, $m)) {
    $candidate_for_redirect = __DIR__ . '/php/' . $m[1] . '.php';
    if (file_exists($candidate_for_redirect)) {
        header('Location: /' . $m[1], true, 301);
        return true;
    }
}

// Map /path  -> /php/path.php (also support requests that already include .php)
if (preg_match('/\.php$/', $uri)) {
    $base = preg_replace('/\.php$/', '', $uri);
    $candidate = __DIR__ . '/php' . rtrim($base, '/') . '.php';
} else {
    $candidate = __DIR__ . '/php' . rtrim($uri, '/') . '.php';
}
if (file_exists($candidate)) {
    require $candidate;
    return true;
}

// Fallback to index.php if exists
if (file_exists(__DIR__ . '/index.php')) {
    require __DIR__ . '/index.php';
    return true;
}

// Not found
header("HTTP/1.0 404 Not Found");
echo "404 Not Found";
return true;
