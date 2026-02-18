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
                <!-- row -->
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="clearfix">
							<div class="card card-bx profile-card author-profile m-b30">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
											<div class="author-media">
												<img src="assets/images/user.jpg" alt="">
												<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" class="update-flie">
													<i class="fa fa-camera"></i>
												</div>
											</div>
											<div class="author-info">
												<h6 class="title">John</h6>
												<span>Developer</span>
											</div>
										</div>
									</div>
									<div class="info-list">
										<ul>
											<li><a href="app-profile.php">Models</a><span>36</span></li>
											<li><a href="uc-lightgallery.php">Gallery</a><span>3</span></li>
											<li><a href="app-profile.php">Lessons</a><span>1</span></li>
										</ul>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group mb-3">
										<div class="form-control rounded text-center bg-white fs-16">Portfolio</div>
									</div>
									<div class="input-group">
										<a href="https://www.dexignlab.com/" target="_blank" class="form-control text-primary rounded text-start bg-white fs-16">https://www.dexignlab.com/</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="card profile-card card-bx m-b30">
							<div class="card-header">
								<h6 class="title">Account setup</h6>
							</div>
							<form class="profile-form">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b30">
											<label class="form-label">Name</label>
											<input type="text" class="form-control" value="John">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Surname</label>
											<input type="text" class="form-control" placeholder="Lee">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Specialty</label>
											<input type="text" class="form-control" value="Developer">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Skills</label>
											<input type="text" class="form-control" value="HTML,  JavaScript,  PHP">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Gender</label>
											<select class="default-select form-control wide">
												<option>Male</option>
												<option>Female</option>
											</select>
											
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Birth</label>
											<input type="text" class="form-control mb-3 mb-xl-0" placeholder="2017-06-04" id="datepicker">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Phone</label>
											<input type="number" class="form-control" value="+123456789">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Email adress</label>
											<input type="email" class="form-control" value="demo@gmail.com">
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">Country</label>
											<select class="default-select form-control wide">
												<option>Russia</option>
												<option>Canada</option>
												<option>China</option>
												<option>India</option>
											</select>
										</div>
										<div class="col-sm-6 m-b30">
											<label class="form-label">City</label>
											<select class="default-select form-control wide">
												<option>Krasnodar</option>
												<option>Krasnodar</option>
												<option>Tyumen</option>
												<option>Chelyabinsk</option>
												<option>Moscow</option>
											 </select>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary">UPDATE</button>
									<a href="page-forgot-password.php" class="btn-link">Forgot your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--**********************************
					Footer start
				***********************************-->
				
				<!--**********************************
					Footer end
				***********************************-->
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
			<div class="footer out-footer">
				<div class="copyright">
					<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023</p>
				</div>
			</div>
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
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   
    <?php include 'elements/page-js.php'; ?>
	
</body>
</html>