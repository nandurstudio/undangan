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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Sparkline</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Line Chart</h4>
							</div>
							<div class="card-body">
                                <span id="sparklinedash"></span>                                
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Site Traffic</h4>
							</div>
							<div class="card-body">
                                <div class="ico-sparkline">
									<div id="sparkline8"></div>
								</div>                              
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
							<div class="card-header">
								<h4 class="card-title">Site Traffic</h4>
							</div>
							<div class="card-body">
                                <div class="ico-sparkline">
									<div id="sparkline9"></div>
								</div>                             
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Bar Chart</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="spark-bar"></div>
								</div>                            
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Stacked Bar CHART</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="StackedBarChart"></div>
								</div>                           
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Tristate charts</h4>
							</div>
							<div class="card-body">
                                <div class="ico-sparkline">
									<div id="tristate"></div>
								</div>                         
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Composite Line Chart</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="sparkline-composite-chart"></div>
								</div>                      
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Composite Bar Chart</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="composite-bar"></div>
								</div>                   
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Bullet Chart</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="bullet-chart"></div>
								</div>                
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Pie Chart</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="sparkline11"></div>
								</div>               
                            </div>
                        </div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
								<h4 class="card-title">Box Plot</h4>
							</div>
							<div class="card-body">
								<div class="ico-sparkline">
									<div id="boxplot"></div>
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