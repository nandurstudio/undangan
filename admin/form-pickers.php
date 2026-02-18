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
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Pickers</a></li>
					</ol>
                </div>
                <!-- row -->
               <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <label class="form-label">Date Range Pick</label>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <label class="form-label">Date Range With Time</label>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="example">
                                            <label class="form-label">Limit Selectable Dates</label>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pick-Date picker</h4>
                            </div>
                            <div class="card-body">
                                <label class="form-label">Default picker</label>
                                <input name="datepicker" class="datepicker-default form-control" id="datepicker-1">
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clock picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-3 mb-3">
                                        <label class="form-label">Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"><span class="input-group-text">
											<i class="far fa-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-3">
                                        <label class="form-label">Auto btn-close Clock Picker</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                            <input type="text" class="form-control" value="13:14"> 
											<span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-3">
                                        <label class="form-label">Now time</label>
                                        <div class="input-group">
                                            <input class="form-control" id="single-input" value="" placeholder="Now">
											<button type="button" id="check-minutes" class="btn waves-effect waves-light btn-ft btn-success">Check the minutes</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <label class="form-label">Left Placement</label>
                                        <div class="input-group clockpicker" data-placement="left" data-align="top" data-autobtn-close="true">
                                            <input type="text" class="form-control" value="13:14"> 
											<span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header">
								
                                <h4 class="card-title">Form Date Picker</h4>
                            
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label">form Date Picker</label>
										<div class="input-hasicon">
											<input name="datepicker" class="form-control bt-datepicker solid">
											<div class="icon"><i class="far fa-calendar"></i></div>
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label">form Date Picker</label>
										<div class="input-hasicon">
											<input name="datepicker" class="form-control bt-datepicker solid">
											<div class="icon"><i class="far fa-calendar"></i></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
					

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Material Date picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-md-6 mb-3">
                                        <label class="form-label">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-3">
                                        <label class="form-label">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-3">
                                        <label class="form-label">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <label class="form-label">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 mb-3">
                                        <div class="example">
                                            <label class="form-label d-block">Simple mode</label>
                                            <input type="text" class="as_colorpicker form-control" value="#7ab2fa">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 mb-3">
                                        <div class="example">
                                            <label class="form-label d-block">Complex mode</label>
                                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 mb-3">
                                        <div class="example">
                                            <label class="form-label d-block">Gradiant mode</label>
                                            <input type="text" class="gradient-colorpicker form-control" value="#bee0ab">
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
</body>
</html>