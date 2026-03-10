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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Nestable</a></li>
					</ol>
                </div>
                <!-- row -->

                <!-- Nestable -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nestable</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-content">
                                            <div class="nestable">
                                                <div class="dd" id="nestable">
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="1">
                                                            <div class="dd-handle">Item 1</div>
                                                        </li>
                                                        <li class="dd-item" data-id="2">
                                                            <div class="dd-handle">Item 2</div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="3">
                                                                    <div class="dd-handle">Item 3</div>
                                                                </li>
                                                                <li class="dd-item" data-id="4">
                                                                    <div class="dd-handle">Item 4</div>
                                                                </li>
                                                                <li class="dd-item" data-id="5">
                                                                    <div class="dd-handle">Item 5</div>
                                                                    <ol class="dd-list">
                                                                        <li class="dd-item" data-id="6">
                                                                            <div class="dd-handle">Item 6</div>
                                                                        </li>
                                                                        <li class="dd-item" data-id="7">
                                                                            <div class="dd-handle">Item 7</div>
                                                                        </li>
                                                                        <li class="dd-item" data-id="8">
                                                                            <div class="dd-handle">Item 8</div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li class="dd-item" data-id="9">
                                                                    <div class="dd-handle">Item 9</div>
                                                                </li>
                                                                <li class="dd-item" data-id="10">
                                                                    <div class="dd-handle">Item 10</div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-content">
                                            <div class="nestable">
                                                <div class="dd" id="nestable2">
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="13">
                                                            <div class="dd-handle">Item 13</div>
                                                        </li>
                                                        <li class="dd-item" data-id="13">
                                                            <div class="dd-handle">Item 13</div>
                                                        </li>
                                                        <li class="dd-item" data-id="14">
                                                            <div class="dd-handle">Item 14</div>
                                                        </li>
                                                        <li class="dd-item" data-id="15">
                                                            <div class="dd-handle">Item 15</div>
                                                            <ol class="dd-list">
                                                                <li class="dd-item" data-id="16">
                                                                    <div class="dd-handle">Item 16</div>
                                                                </li>
                                                                <li class="dd-item" data-id="17">
                                                                    <div class="dd-handle">Item 17</div>
                                                                </li>
                                                                <li class="dd-item" data-id="18">
                                                                    <div class="dd-handle">Item 18</div>
                                                                </li>
                                                                <li class="dd-item" data-id="18">
                                                                    <div class="dd-handle">Item 19</div>
                                                                </li>
                                                                <li class="dd-item" data-id="18">
                                                                    <div class="dd-handle">Item 20</div>
                                                                </li>
                                                                <li class="dd-item" data-id="18">
                                                                    <div class="dd-handle">Item 21</div>
                                                                </li>
                                                            </ol>
                                                        </li>
                                                    </ol>
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
</body>
</html>