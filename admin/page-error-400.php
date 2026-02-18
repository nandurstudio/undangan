
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
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">400</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
                        <p>Your Request resulted in an error</p>
						<div>
                            <a class="btn btn-primary" href="index.php">Back to Home</a>
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