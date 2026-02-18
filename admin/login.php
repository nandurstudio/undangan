<?php
require_once __DIR__ . '/config/dz.php';
$auth = file_exists(__DIR__ . '/config/auth.php') ? require __DIR__ . '/config/auth.php' : null;

// if auth not configured, deny access
if (empty($auth) || empty($auth['enabled'])) {
    http_response_code(403);
    echo 'Authentication is not configured.';
    exit;
}

// redirect to index if already logged in
session_start();
if (!empty($_SESSION['authenticated'])) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['username'] ?? '');
    $pass = $_POST['password'] ?? '';
    $remember = !empty($_POST['remember']);

    // support hashed password (password_hash) from config/auth.php or .env
    $valid = false;
    if ($user === ($auth['username'] ?? '')) {
        if (!empty($auth['password_hash'])) {
            // recommended: use password_verify against stored hash
            $valid = password_verify($pass, $auth['password_hash']);
        } elseif (isset($auth['password']) && $pass === $auth['password']) {
            // backward-compatibility fallback
            $valid = true;
        }
    }

    if ($valid) {
        $lifetime = $remember ? ($auth['remember_me_lifetime'] ?? 604800) : ($auth['timeout'] ?? 1800);
        session_write_close();
        session_set_cookie_params([ 'lifetime' => (int)$lifetime, 'path' => '/' ]);
        session_start();
        session_regenerate_id(true);
        $_SESSION['authenticated'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['last_activity'] = time();
        header('Location: index.php');
        exit;
    }

    $error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?> - Login</title>


	<?php include 'elements/meta.php';?>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $DexignZoneSettings['site_level']['favicon']?>">
    
    <?php include 'elements/page-css.php'; ?>

</head>

<body>
  <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="index.php"><img class="logo-auth" src="<?php echo $DexignZoneSettings['site_level']['asset_url']; ?>images/logo-full.png" alt=""></a>
                            </div>
                            <h4 class="text-center mb-4">Sign in your account</h4>

                            <?php if ($error): ?>
                                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                            <?php endif; ?>

                            <form method="post" action="">
                                <div class="form-group mb-4">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter username" id="username" name="username" required autofocus>
                                </div>
                                <div class="mb-sm-4 mb-3 position-relative">
                                    <label class="form-label" for="dlab-password">Password</label>
                                    <input type="password" id="dlab-password" name="password" class="form-control" value="" required>
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="form-row d-flex flex-wrap justify-content-between mb-2">
                                    <div class="form-group mb-sm-4 mb-1">
                                        <div class="form-check custom-checkbox ms-1">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1" name="remember" <?php echo !empty($_POST['remember']) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                        </div>
                                    </div>
                                    <div class="form-group ms-2">
                                        <a href="page-forgot-password.php">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </form>

                            <div class="mt-3 text-center">
                                <small class="text-muted">Protected area — session timeout <?php echo intval($auth['timeout']/60); ?> minutes.</small>
                            </div>

                            <div class="new-account mt-3 text-center">
                                <p>Don't have an account? <a class="text-primary" href="page-register.php">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'elements/page-js.php'; ?>
</body>
</html>
