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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Details">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>4</span>
										</a></li>
									</ul>
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">First Name</label>
														<input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Last Name</label>
														<input type="text" name="lastName" class="form-control" placeholder="Montana" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Email Address</label>
														<input type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Phone Number</label>
														<input type="number" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="mb-3">
														<label class="text-label form-label required">Where are you from</label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Company Name</label>
														<input type="text" name="firstName" class="form-control" placeholder="Cellophane Square" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Company Email Address</label>
														<input type="email" class="form-control" id="emial1" placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Company Phone Number</label>
														<input type="number" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label required">Your position in Company</label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-sm-4 mb-2">
													<label class="col-form-label required">Monday</label>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="9.00" type="number" name="input1" id="input1">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="6.00" type="number" name="input2" id="input2">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<label class="col-form-label required">Tuesday</label>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="9.00" type="number" name="input3" id="input3">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="6.00" type="number" name="input4" id="input4">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<label class="col-form-label required">Wednesday</label>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="9.00" type="number" name="input5" id="input5">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="6.00" type="number" name="input6" id="input6">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<label class="col-form-label required">Thrusday</label>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="9.00" type="number" name="input7" id="input7">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="6.00" type="number" name="input8" id="input8">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 mb-2">
													<label class="col-form-label required">Friday</label>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="9.00" type="number" name="input9" id="input9">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="mb-3">
														<input class="form-control" value="6.00" type="number" name="input10" id="input10">
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="mb-3">
														<label for="mailclient11" class="mailclinet mailclinet-gmail">
															<input type="radio" name="emailclient" id="mailclient11">
															<span class="mail-icon">
																<i class="mdi mdi-google-plus" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Gmail</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="mb-3">
														<label for="mailclient12" class="mailclinet mailclinet-office">
															<input type="radio" name="emailclient" id="mailclient12">
															<span class="mail-icon">
																<i class="mdi mdi-office" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Office</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="mb-3">
														<label for="mailclient13" class="mailclinet mailclinet-drive">
															<input type="radio" name="emailclient" id="mailclient13">
															<span class="mail-icon">
																<i class="mdi mdi-google-drive" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Drive</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="mb-3">
														<label for="mailclient14" class="mailclinet mailclinet-another">
															<input type="radio" name="emailclient" id="mailclient14">
															<span class="mail-icon">
																<i class="fas fa-question-circle"></i>
															</span>
															<span class="mail-text">Another Service</span>
														</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<div class="skip-email text-center">
														<p>Or if want skip this step entirely and setup it later</p>
														<a href="javascript:void(0)">Skip step</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
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
	
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>

</body>

</html>