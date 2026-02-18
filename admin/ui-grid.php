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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Grid</a></li>
					</ol>
                </div>
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grid options</h4>
                            </div>
                            <div class="card-body">
                                <p>While Bootstrap u ses or for defining most sizes,are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size. See how aspects of the Bootstrap
                                    grid system work across multiple devices with a handy table.</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" style="min-width: 480px;">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center text-black">
                                                    Extra small<br>
                                                    <small class="text-black">&lt;576px</small>
                                                </th>
                                                <th class="text-center text-black">
                                                    Small<br>
                                                    <small class="text-black">≥576px</small>
                                                </th>
                                                <th class="text-center text-black">
                                                    Medium<br>
                                                    <small class="text-black">≥768px</small>
                                                </th>
                                                <th class="text-center text-black">
                                                    Large<br>
                                                    <small class="text-black">≥992px</small>
                                                </th>
                                                <th class="text-center text-black">
                                                    Extra large<br>
                                                    <small class="text-black">≥1200px</small>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap text-black" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap text-black" scope="row">Gutter width</th>
                                                <td colspan="5">24px (12px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap text-black" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap text-black" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grid Column</h4>
                            </div>
                            <div class="card-body">
                                <p>Using a single set of grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any</p>
                                <div class="row">
									<div class="col-lg-12">
										<div class="grid-col mb-4">.Col-lg-12</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-11">
										<div class="grid-col mb-4">.Col-lg-11</div>
									</div>
									<div class="col-xl-1">
										<div class="grid-col mb-4">.Col-lg-01</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-10">
										<div class="grid-col mb-4">.Col-lg-10</div>
									</div>
									<div class="col-xl-2">
										<div class="grid-col mb-4">.Col-lg-02</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-9">
										<div class="grid-col mb-4">.Col-lg-09</div>
									</div>
									<div class="col-xl-3">
										<div class="grid-col mb-4">.Col-lg-03</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-8">
										<div class="grid-col mb-4">.Col-lg-08</div>
									</div>
									<div class="col-xl-4">
										<div class="grid-col mb-4">.Col-lg-04</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-7">
										<div class="grid-col mb-4">.Col-lg-07</div>
									</div>
									<div class="col-xl-5">
										<div class="grid-col mb-4">.Col-lg-05</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-6">
										<div class="grid-col mb-4">.Col-lg-06</div>
									</div>
									<div class="col-xl-6">
										<div class="grid-col mb-4">.Col-lg-06</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-5">
										<div class="grid-col mb-4">.Col-lg-05</div>
									</div>
									<div class="col-xl-7">
										<div class="grid-col mb-4">.Col-lg-07</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-4">
										<div class="grid-col mb-4">.Col-lg-04</div>
									</div>
									<div class="col-xl-8">
										<div class="grid-col mb-4">.Col-lg-08</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-3">
										<div class="grid-col mb-4">.Col-lg-03</div>
									</div>
									<div class="col-xl-9">
										<div class="grid-col mb-4">.Col-lg-09</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-2">
										<div class="grid-col mb-4">.Col-lg-02</div>
									</div>
									<div class="col-xl-10">
										<div class="grid-col mb-4">.Col-lg-10</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-1">
										<div class="grid-col mb-4">.Col-lg-01</div>
									</div>
									<div class="col-xl-11">
										<div class="grid-col mb-4">.Col-lg-11</div>
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