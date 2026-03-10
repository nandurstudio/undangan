<?php
    require_once __DIR__ . '/config/dz.php';

    // load auth config if present
    $auth_cfg = file_exists(__DIR__ . '/config/auth.php') ? require __DIR__ . '/config/auth.php' : null;

    // start session for auth checks
    session_start();

    if (!empty($auth_cfg) && !empty($auth_cfg['enabled'])) {
        $timeout = intval($auth_cfg['timeout'] ?? 1800);
        $last = intval($_SESSION['last_activity'] ?? 0);
        // session expired or not logged in -> redirect to login
        if (empty($_SESSION['authenticated']) || ($last !== 0 && ($last + $timeout) < time())) {
            header('Location: login.php');
            exit;
        }
        // refresh last activity timestamp
        $_SESSION['last_activity'] = time();
    }
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
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card tryal-gradient">
											<div class="card-body tryal row">
												<div class="col-xl-7 col-sm-7">
													<h2 class="mb-0">Manage your project in one touch</h2>
													<span>Let Fillow manage your project automatically with our best AI systems </span>
													<a href="javascript:void(0);" class="btn btn-rounded">Try Free Now</a>
												</div>
												<div class="col-xl-5 col-sm-5 ">
													<img src="assets/images/chart.png" alt="" class="sd-shape">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0 flex-wrap">
												<h4 class="card-title">Project Statistics</h4>
												<div class="d-flex align-items-center mt-3 project-tab">	
													<div class="card-tabs mt-sm-0 me-3">
														<ul class="nav nav-tabs" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#weekly" role="tab">Weekly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#today" role="tab">Today</a>
															</li>
														</ul>
													</div>
													<div class="dropdown ms-2">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>	
											</div>
											<div class="card-body">
												<div class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 mb-0">246</h4>
															<p class="mb-0">Total Projects</p>
														</div>
													</div>
													<div class="d-flex">	
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"/>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 mb-0 ">246</h4>
																<p class="mb-0">On Going</p>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"/>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 mb-0">28</h4>
																<p class="mb-0">Unfinished</p>
															</div>
														</div>
													</div>
												</div>
												<div id="chartBar" class="chartBar"></div>
												<div class="d-flex align-items-center">
													<label class="form-check-label form-label mb-0" for="flexSwitchCheckChecked1">Number</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked>
													 
													</div>
													<label class="form-check-label form-label mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>	
													<div class="form-check form-switch toggle-switch">
													  <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="card-title mb-0">Completion Project Rate</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header pb-0 border-0">
												<div>
													<h4 class="card-title">Recent Emails</h4>
													<p class="mb-0">Lorem ipsum dolor sit amet</p>
												</div>
												<div>
													<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded">View More</a>
												</div>
											</div>
											<div class="card-body px-0 pt-2">
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-success">K</span>	
														</div>
														<div class="ms-3">
															<a href="email-inbox.php"> <h4 class="fs-18 font-w500">How to improve project management flows</h4></a>
															<P class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</P>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															  <input type="checkbox">
															  <span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="assets/images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3">
															<a href="email-inbox.php"><h4 class="fs-18 font-w500">Fillow Final UseCase Diagram</h4></a>
															<P class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</P>
															<div class="final-badge">
																<span class="badge text-black border"><i class="far fa-file-alt me-3"></i>Master_file.fig</span>
																<span class="badge text-black border"><i class="fas fa-image me-2"></i>CoverPreview.jpg</span>
																<span class="badge border bgl-primary font-w700">4 files more</span>
															</div>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															  <input type="checkbox">
															  <span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-warning">G</span>	
														</div>
														<div class="ms-3">
															<a href="email-inbox.php"><h4 class="fs-18 font-w500">Weekly Design Inspirations by Envato</h4></a>
															<P class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</P>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															  <input type="checkbox">
															  <span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="assets/images/profile/small/pic8.jpg" alt="">
														</div>
														<div class="ms-3">
															<a href="email-inbox.php"><h4 class="fs-18 font-w500">How to improve project management flows</h4></a>
															<P class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</P>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															  <input type="checkbox">
															  <span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body card-padding d-flex align-items-center justify-content-between">
														<div>
															<h4 class="mb-3 text-nowrap">Total Clients</h4>
															<div class="d-flex align-items-center">
																<h2 class="fs-32 font-w700 mb-0 counter">68</h2>
																<div class="ms-4 d-flex align-items-center">
																	<svg width="16" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"/>
																	</svg>
																	<strong class="text-success">+0,5%</strong>
																</div>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body card-padding d-flex align-items-center justify-content-between">
														<div class="w-75">
															<h4 class="mb-3 text-nowrap">Total Clients</h4>
															<div class="progress default-progress">
																<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:8px;" role="progressbar">
																	<span class="sr-only">45% Complete</span>
																</div>
															</div>
															<div class="mt-2">
																<p class="mb-0"><strong class="text-danger me-2">76</strong>left from target</p>
																
															</div>
														</div>
														<div>
															<h2 class="fs-32 font-w700 mb-0">42</h2>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700 counter">562</h2>
																<h4 class="mb-0 text-nowrap">Total Clients</h4>
																<p class="mb-0"><strong class="text-danger">-2%</strong> than last month</p>
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700 counter">892</h2>
																<h4 class="mb-0 text-nowrap">New Projects</h4>
																<p class="mb-0"><strong class="text-success">+2%</strong> than last month</p>
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="card-title mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400 text-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quibusdam eaque vero ullam odit nostrum nemo excepturi explicabo ipsum voluptas nihil quae doloremque ducimus. </span>
															</div>	
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400 text-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab autem, quae debitis voluptatum omnis, quaerat deserunt nam voluptates exercitationem facere sequi dolorem.  </span>
															</div>	
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
																<span class="fs-14 font-w400 text-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab autem, quae debitis voluptatum omnis, quaerat deserunt nam voluptates exercitationem facere sequi dolorem. </span>
															</div>	
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6 align-self-center">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress <small class="text-success">70%</small></span>	
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="card-title">Email Categories</h4>
															<p class="mb-0">Lorem ipsum dolor sit amet</p>
														</div>	
													</div>	
													<div class="card-body pb-0">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4>Legend</h4>
														</div>
														<div class="email-lagend">
															<div class="d-flex align-items-center justify-content-between mb-3">
																<span class="fs-16 text-gray">	
																	<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#886CC0"/>
																	</svg>
																	Primary (27%)
																</span>
																<h5 class="mb-0 font-w600">763</h5>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-3">
																<span class="fs-16 text-gray">	
																	<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#26E023"/>
																	</svg>
																	Promotion (11%)
																</span>
																<h5 class="mb-0 font-w600">321</h5>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-3">
																<span class="fs-16 text-gray">	
																	<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#61CFF1"/>
																	</svg>
																	Forum (22%)
																</span>
																<h5 class="mb-0 font-w600">69</h5>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-3">
																<span class="fs-16 text-gray">	
																	<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FFDA7C"/>
																	</svg>
																	Socials (15%) 
																</span>
																<h5 class="mb-0 font-w600">154</h5>
															</div>
															<div class="d-flex align-items-center justify-content-between  mb-0 spam">
																<span class="fs-16 text-gray">	
																	<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6" fill="#FF86B1"/>
																	</svg>
																	Spam (25%) 
																</span>
																<h5 class="mb-0 font-w600">696</h5>
															</div>
														</div>
														
													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded d-block">Update Progress</a>		
														
													</div>
												</div>
											</div>	
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="card-title">Important Projects</h4>
															<p class="mb-0">Lorem ipsum dolor sit amet</p>
														</div>
													</div>
													<div class="card-body pb-0 pt-3">
														<div class="project-details"> 
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<div class="big-wind">
																		<img src="assets/images/big-wind.png" alt="">
																	</div>
																	<div class="ms-3">
																		<h5 class="mb-1">Big Wind</h5>
																		<p class="mb-0">Creative Agency</p>
																	</div>
																</div>	
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h5 class="mt-3">Optimization Dashboard Page for indexing in Google</h5>
															<div class="projects">
																<span class="badge badge-warning light me-3">SEO</span>
																<span class="badge badge-danger light">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:5px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 justify-content-between">
																	<p class="mb-0"><strong class="text-black me-2">12</strong>Task Done</p>
																	<p class="mb-0">Due date: 12/05/2020</p>
																</div>
															</div>
														</div>	
														<hr>
														<div class="project-details"> 
															<div class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="assets/images/circle-hunt.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h5 class="mb-1">Circle Hunt</h5>
																		<p class="mb-0">Creative Agency</p>
																	</div>
																</div>	
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																			<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																			<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item" href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h5 class="mt-3">Redesign Landing Page Website for Company Profile</h5>
															<div class="projects">
																<span class="badge badge-primary light me-3">UI/UX</span>
																<span class="badge badge-danger light">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:5px;" role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div class="d-flex align-items-end mt-3 justify-content-between">
																	<p class="mb-0"><strong class="text-black me-2">12</strong>Task Done</p>
																	<p class="mb-0">Due date: 12/05/2020</p>
																</div>
															</div>
														</div>	
														<hr>
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded d-block">Pin other projects</a>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="card">
											<div class="card-header pb-0 border-0">
												<div>
													<h4 class="card-title">Messages</h4>
													<p class="mb-0">Lorem ipsum dolor sit amet</p>
												</div>
												<div>
													<a href="javascript:void(0);" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#sendMessageModal" >+ New Messages</a>
												</div>
											</div>
											<div class="card-body px-0 pt-0">
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3 w-100 ">
															<a href="app-profile.php"><h5 class="mb-1">Maren Rosser</h5></a>
															<div class="d-flex justify-content-between">
																<p class="me-auto mb-0 text-black">Hei, dont forget to clear server cache!</p>
																<small class="me-4">25min ago</small>
															</div>
														</div>
														
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box">
															<img src="assets/images/profile/small/pic7.jpg" alt="">
														</div>	
														<div class="ms-3 w-100">
															<a href="app-profile.php"><h5 class="mb-1">Kaiya Bergson</h5></a>
															<div class="d-flex justify-content-between">
																<p class="me-auto mb-0 text-black">I remember that project due is tomorrow.</p>
																<small class="me-4">Yesterday, 8:24 AM</small>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/images/profile/small/pic4.jpg" alt="">
														</div>	
														<div class="ms-3 w-100">
															<a href="app-profile.php"><h5 class="mb-1">Ruben Press</h5></a>
															<div class="d-flex justify-content-between">
																<p class="me-auto mb-0 text-black">Ok sir. I will fix it as soon as possible</p>
																<small class="me-4">December 12th, 2020  10:24 AM</small>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/images/profile/small/pic3.jpg" alt="">
														</div>	
														<div class="ms-3 w-100">
															<a href="app-profile.php"><h5 class="mb-1">Cristofer Torff</h5></a>
															<div class="d-flex justify-content-between">
																<p class="me-auto mb-0 text-black">Maybe we should schedule that meeting</p>
																<small class="me-4">December 12th, 2020  10:24 AM</small>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/images/profile/small/pic5.jpg" alt="">
														</div>	
														<div class="ms-3 w-100">
															<a href="app-profile.php"><h5 class="mb-1">Ann Rosser</h5></a>
															<div class="d-flex justify-content-between">
																<p class="me-auto mb-0 text-black">I dont’t know where that files saved dude.</p>
																<small class="me-4">Yesterday, 8:24 AM</small>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		<!-- Modal -->
		<div class="modal fade" id="sendMessageModal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Send Message</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<form class="comment-form">
							<div class="row"> 
								<div class="col-lg-6">
									<div class="mb-3">
										<label class="text-black font-w600 form-label required">Name </label>
										<input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<label class="text-black font-w600 form-label">Email </label>
										<input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="text-black font-w600 form-label">Comment</label>
										<textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3 mb-0">
										<input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
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
		function cardsCenter()
		{
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
	</script>

</body>
</html>