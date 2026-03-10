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
	<!-- Light Gallery -->
	

	
    <?php include 'elements/page-css.php'; ?>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
   <?php include 'elements/pre-loader.php'; ?>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       <?php include 'elements/nav-header.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<?php include 'elements/chatbox.php'; ?>
		<!--**********************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
		<?php include 'elements/header.php'; ?>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
         <?php include 'elements/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body default-height">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Light Gallery</a></li>
					</ol>
                </div>
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title">Light Gallery</h4>
							</div>
							<div class="card-body pb-1">
								<div id="lightgallery" class="row">
									<a href="images/big/img1.jpg" data-src="assets/images/big/img1.jpg" class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img1.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img2.jpg" data-src="assets/images/big/img2.jpg" class=" lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img2.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img3.jpg" data-src="assets/images/big/img3.jpg" class=" lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img3.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img4.jpg" data-src="assets/images/big/img4.jpg" class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img4.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img5.jpg" data-src="assets/images/big/img5.jpg" class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img5.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img6.jpg" data-src="assets/images/big/img6.jpg" class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img6.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img7.jpg" data-src="assets/images/big/img7.jpg" class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img7.jpg" class="rounded" alt="" style="width:100%;">
									</a>
									<a href="images/big/img8.jpg" data-src="assets/images/big/img8.jpg" class=" lg-item col-lg-3 col-md-6 mb-4">
										<img src="assets/images/big/img8.jpg" class="rounded" alt="" style="width:100%;">
									</a>
								</div>
							</div>
                        </div>
                        <!-- /# card -->
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
         <?php include 'elements/footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    
    <?php include 'elements/page-js.php'; ?>
</body>

</html>