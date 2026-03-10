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
            <!-- row -->
			<div class="container-fluid">
				<div class="project-page d-flex justify-content-between align-items-center flex-wrap">
					<div class="card-tabs mb-4">
						<ul class="nav nav-tabs style-1" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#AllStatus" role="tab">All Status</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#OnProgress" role="tab">On Progress</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#Pending" role="tab">Pending</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#Closed" role="tab">Closed</a>
							</li>
						</ul>
					</div>
					<div class="mb-4">
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">+ New Project</a>
					</div>
				</div>	
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content">
							<div class="tab-pane fade active show" id="AllStatus">
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>	
								</div>	
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Create UseCase Diagram of Fillow..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/44.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">Jakob Vetrovs</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/33.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>	
								</div>	
								<div class="card  project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>	
									</div>	
								</div>
								<div class="card project-card ">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Create UseCase Diagram of Fillow..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/44.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">Jakob Vetrovs</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/33.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>	
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
							</div>
							<div class="tab-pane fade" id="OnProgress">
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-info light badge-md">ON PROGRESS</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
							</div>
							<div class="tab-pane fade" id="Pending">
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-warning light badge-md">PENDING</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
							</div>
							<div class="tab-pane fade" id="Closed">
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-danger light badge-md">Closed</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-danger light badge-md">Closed</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-danger light badge-md">Closed</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-danger light badge-md">Closed</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>		
								</div>
								<div class="card project-card">
									<div class="card-body py-3 px-4">
										<div class="row align-items-center">
											<div class="col-xl-3  col-md-4 col-sm-12 align-items-center customers">
												<div class="media-body">
													<p class="text-primary mb-0">#P-000441425</p>
													<h6 class="text-black">Redesign Owlio Landing Page Web..</h6>
													<p class="mb-0"><i class="fas fa-calendar me-3"></i>Created on Sep 8th, 2020</p>
												</div>
											</div>
											<div class="col-xl-2  col-md-4 col-sm-6 mt-md-0 mt-sm-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/11.jpg" alt="">
													<div>
														<p class="mb-0">Client</p>
														<h6 class="mb-0">James Jr.</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2 col-md-4 col-sm-6 text-lg-center mt-md-0 mt-3">
												<div class="d-flex project-image">
													<img src="assets/images/customers/22.jpg" alt="">
													<div>
														<p class="mb-0">Person in charge</p>
														<h6 class="mb-0">Marley Dokidis</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-3  col-md-6 col-sm-6 mt-3 mt-xl-0">
												<div class="d-flex project-image">
													<svg class="me-3" width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="27.5" cy="27.5" r="27.5" fill="#886CC0"></circle>
														<g clip-path="url(#clip0)">
														<path d="M37.2961 23.6858C37.1797 23.4406 36.9325 23.2843 36.661 23.2843H29.6088L33.8773 16.0608C34.0057 15.8435 34.0077 15.5738 33.8826 15.3546C33.7574 15.1354 33.5244 14.9999 33.2719 15L27.2468 15.0007C26.9968 15.0008 26.7656 15.1335 26.6396 15.3495L18.7318 28.905C18.6049 29.1224 18.604 29.3911 18.7294 29.6094C18.8548 29.8277 19.0873 29.9624 19.3391 29.9624H26.3464L24.3054 38.1263C24.2255 38.4457 24.3781 38.7779 24.6725 38.9255C24.7729 38.9757 24.8806 39 24.9872 39C25.1933 39 25.3952 38.9094 25.5324 38.7413L37.2058 24.4319C37.3774 24.2215 37.4126 23.931 37.2961 23.6858Z" fill="white"></path>
														</g>
														<defs>
														<clipPath>
														<rect width="24" height="24" fill="white" transform="translate(16 15)"></rect>
														</clipPath>
														</defs>
													</svg>
													<div>
														<p class="mb-0">Deadline</p>
														<h6 class="mb-0">Tuesday,  Sep 29th 2020</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-2  col-sm-6 col-sm-4 mt-xl-0  mt-3">
												<div class="d-flex justify-content-sm-end project-btn">
													<a href="javascript:void(0);" class="badge badge-danger light badge-md">Closed</a>
													<div class="dropdown ms-4  mt-auto mb-auto">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
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
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<div class="mb-sm-0 mb-3">
							<p class="mb-0 text-black">Showing 5 of 102 Data</p>
						</div>
						 <nav>
							<ul class="pagination pagination-circle">
								<li class="page-item page-indicator">
									<a class="page-link" href="javascript:void(0)">
										<i class="la la-angle-left"></i></a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
								<li class="page-item page-indicator">
									<a class="page-link" href="javascript:void(0)">
										<i class="la la-angle-right"></i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>	
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h1 class="modal-title fs-5" id="exampleModalLabel">Project title</h1>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row">
							<div class="col-xl-12">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Project Id</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="#P-000441425">
								  </div>
							</div>
							<div class="col-xl-12">
								<div class="mb-3">
									<label for="exampleFormControlInput2" class="form-label">Client Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="James Jr.">
								  </div>
							</div>
						  </div>
					</form>
				
				 
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
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
	
</body>
</html>