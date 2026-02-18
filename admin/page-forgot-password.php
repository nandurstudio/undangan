<?php 
	 require_once __DIR__ . '/config/dz.php';
	 
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>


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
                                <a href="index.php"><img class="logo-auth" src="assets/images/logo-full.png" alt=""></a>
                            </div>
                            <h4 class="text-center mb-4">Forgot Password</h4>
                            <form action="index.php">
                                <div class="form-group mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" value="hello@example.com" id="email">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                </div>
                            </form>
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