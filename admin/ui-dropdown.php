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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Dropdown</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Basic Dropdown</h4>
                                <p class="m-0 subtitle">A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropdown Divider</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-divider</code> class is used to separate links inside the dropdown menu with a thin horizontal border
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropdown Header</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-header</code> class is used to add headers inside the dropdown menu
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <h5 class="dropdown-header">Dropdown header</h5>
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                            <h5 class="dropdown-header">Dropdown header</h5>
                                            <a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Disable and Active items</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-header</code> class is used to add headers inside the dropdown menu
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Normal</a>
                                            <a class="dropdown-item active" href="#">Active</a>
                                            <a class="dropdown-item disabled" href="#">Disabled</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Align Right</h4>
                                <p class="m-0 subtitle">To right-align the dropdown, add the
                                    <code>.dropdown-menu-end</code> class to the element with .dropdown-menu</p>
                            </div>
                            <div class="card-body">
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropup</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropup</code> class makes the dropdown menu expand upwards instead of downwards
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropup button -->
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropup
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>

                                    <!-- Split dropup button -->
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Split dropup
                                        </button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropright </h4>
                                <p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
                                    <code>.dropend</code> to the parent element</p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropend mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Dropright
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>

                                    <!-- Split dropright button -->
                                    <div class="btn-group dropend mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Split dropright
                                        </button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropright</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">dropstart </h4>
                                <p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
                                    <code>.dropstart </code> to the parent element</p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropstart button -->
                                    <div class="btn-group dropstart mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            dropstart
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>

                                    <!-- Split dropstart button -->
                                    <div class="btn-group mb-1">
                                        <div class="btn-group dropstart " role="group">
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                <span class="sr-only">Toggle dropstart</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Link 1</a>
                                                <a class="dropdown-item" href="#">Link 2</a>
                                                <a class="dropdown-item" href="#">Link 3</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">
                                            Split dropstart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Button Dropdowns</h4>
                            </div>
                            <div class="card-body">
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Sizing</h4>
                                <p class="m-0 subtitle">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
                            </div>
                            <div class="card-body">
                                <div class="dropdown-size">
                                    <!-- Large button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            Large button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg" type="button">
                                            Large split button
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- Small button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            Small button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm" type="button">
                                            Small split button
                                        </button>
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Custom style</h4>
                                <p class="m-0 subtitle">Use
                                    <code>.custom-dropdown</code> this class for this style</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Last 1 Month</a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Last 1 Month</a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="dropdown">Last 1 Hour
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Last 1 hour</a>
                                                <a class="dropdown-item" href="#">Last 2 hour</a>
                                                <a class="dropdown-item" href="#">Last 3 hour</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Last 1 Month</a>
                                                <a class="dropdown-item" href="#">Last 6 Month</a>
                                                <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown">
                                                <i class="ti-search m-r-5"></i> 3 AM
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">6 AM</a>
                                                <a class="dropdown-item" href="#">9 AM</a>
                                                <a class="dropdown-item" href="#">12 AM</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="dropdown">
                                                <i class="ti-calendar m-r-5"></i> March 20, 2018 &nbsp; To &nbsp;April
                                                20, 2018
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">May 20, 2018 &nbsp; To &nbsp; June 20,
                                                    2018</a>
                                                <a class="dropdown-item" href="#">July 20, 2018 &nbsp; To &nbsp; August
                                                    20, 2018</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
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