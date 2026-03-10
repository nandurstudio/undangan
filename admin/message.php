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
				<div class="row">
					<div class="col-xl-12">
						<div class="card mb-0 h-auto">
							<div class="card-body p-0">
								<div class="row">
									<div class="col-xl-3 col-xxl-4 border-right pe-0 chat-left-body ">
										<div class="meassge-left-side">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<h3 class="mb-0 me-2">Inbox</h3>
													<h6 class="text-gray mb-0">(2,456)</h6>
												</div>	
												<div class="plus-bx">
													<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></a>
												</div>
											</div>
											<div class="">	
												<div class="card-tabs">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item" role="presentation">
														  <button class="nav-link active w-100" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All</button>
														</li>
														<li class="nav-item" role="presentation">
														  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Recent</button>
														</li>
														<li class="nav-item" role="presentation">
														  <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Message</button>
														</li>
													</ul>
												</div>
											</div>	
										</div>	
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
												<div class="chat-sidebar" id="chatSidebar">
													<p class="ms-4 mb-2">TEAM</p>
													<div class="chat-bx d-flex active mb-2 border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="recent-msg pt-3 chat-bx">
														<div class="d-flex justify-content-between align-items-center">
															<p class="mb-0">RECENT MESSAGE</p>
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
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic11.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Rayna Carder</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div class="d-flex justify-content-between">
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																<span>
																	<svg class="mt-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M16.4935 6.34536C16.0279 5.87458 15.2693 5.86865 14.7964 6.33213L5.92643 15.0987L2.07056 11.1069C1.61067 10.6276 0.849313 10.6118 0.370044 11.0717C-0.109276 11.5316 -0.125009 12.293 0.334881 12.7723C0.336964 12.7744 0.338996 12.7765 0.34108 12.7787L5.0425 17.6508C5.26749 17.8804 5.57501 18.0103 5.89643 18.0116H5.90966C6.22499 18.0107 6.52734 17.8858 6.75156 17.6641L16.4826 8.04239C16.9528 7.57614 16.9576 6.8176 16.4935 6.34536Z" fill="#886CC0"/>
																	<path d="M12.2591 17.6509C12.4835 17.8798 12.79 18.0097 13.1106 18.0117H13.1238C13.4392 18.0107 13.7415 17.8859 13.9657 17.6641L23.6969 8.0424C24.1379 7.54574 24.0929 6.78557 23.5963 6.34449C23.146 5.94461 22.4695 5.93935 22.0131 6.33215L13.1467 15.0987L12.8303 14.7703C12.3705 14.291 11.6092 14.2752 11.1298 14.7351C10.6505 15.195 10.6347 15.9563 11.0946 16.4356C11.0967 16.4378 11.0988 16.44 11.1009 16.4421L12.2591 17.6509Z" fill="#886CC0"/>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"/>
																	</clipPath>
																	</defs>
																	</svg>
																</span>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic22.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Kierra Curtis</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
												<div class="chat-sidebar" id="chatSidebar1">
													<p class="ms-4 mb-2">TEAM</p>
													<div class="chat-bx d-flex active mb-2 border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="recent-msg pt-3 chat-bx">
														<div class="d-flex justify-content-between align-items-center">
															<p class="mb-0">RECENT MESSAGE</p>
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
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic11.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Rayna Carder</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div class="d-flex justify-content-between">
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																<span>
																	<svg class="mt-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M16.4935 6.34536C16.0279 5.87458 15.2693 5.86865 14.7964 6.33213L5.92643 15.0987L2.07056 11.1069C1.61067 10.6276 0.849313 10.6118 0.370044 11.0717C-0.109276 11.5316 -0.125009 12.293 0.334881 12.7723C0.336964 12.7744 0.338996 12.7765 0.34108 12.7787L5.0425 17.6508C5.26749 17.8804 5.57501 18.0103 5.89643 18.0116H5.90966C6.22499 18.0107 6.52734 17.8858 6.75156 17.6641L16.4826 8.04239C16.9528 7.57614 16.9576 6.8176 16.4935 6.34536Z" fill="#886CC0"/>
																	<path d="M12.2591 17.6509C12.4835 17.8798 12.79 18.0097 13.1106 18.0117H13.1238C13.4392 18.0107 13.7415 17.8859 13.9657 17.6641L23.6969 8.0424C24.1379 7.54574 24.0929 6.78557 23.5963 6.34449C23.146 5.94461 22.4695 5.93935 22.0131 6.33215L13.1467 15.0987L12.8303 14.7703C12.3705 14.291 11.6092 14.2752 11.1298 14.7351C10.6505 15.195 10.6347 15.9563 11.0946 16.4356C11.0967 16.4378 11.0988 16.44 11.1009 16.4421L12.2591 17.6509Z" fill="#886CC0"/>
																	</g>
																	<defs>
																	<clipPath id="clip1">
																	<rect width="24" height="24" fill="white"/>
																	</clipPath>
																	</defs>
																	</svg>
																</span>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic22.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Kierra Curtis</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
												<div class="chat-sidebar" id="chatSidebar2">
													<p class="ms-4 mb-2">TEAM</p>
													<div class="chat-bx d-flex active mb-2 border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="group-pic">
															<div class="d-flex">
																<img src="assets/images/group/g1.jpg" alt="">
																<img src="assets/images/group/g2.jpg" alt="">
															</div>	
															<div class="d-flex">
																<img src="assets/images/group/g3.jpg" alt="">
																<img src="assets/images/group/g4.jpg" alt="">
															</div>	
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center justify-content-between">
																<h6 class="mb-0">Fillow Designer Team</h6>
																<small class="">2m ago</small>
															</div>	
															<p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
														</div>
													</div>
													<div class="recent-msg pt-3 chat-bx">
														<div class="d-flex justify-content-between align-items-center">
															<p class="mb-0">RECENT MESSAGE</p>
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
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic11.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Rayna Carder</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div class="d-flex justify-content-between">
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																<span>
																	<svg class="mt-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M16.4935 6.34536C16.0279 5.87458 15.2693 5.86865 14.7964 6.33213L5.92643 15.0987L2.07056 11.1069C1.61067 10.6276 0.849313 10.6118 0.370044 11.0717C-0.109276 11.5316 -0.125009 12.293 0.334881 12.7723C0.336964 12.7744 0.338996 12.7765 0.34108 12.7787L5.0425 17.6508C5.26749 17.8804 5.57501 18.0103 5.89643 18.0116H5.90966C6.22499 18.0107 6.52734 17.8858 6.75156 17.6641L16.4826 8.04239C16.9528 7.57614 16.9576 6.8176 16.4935 6.34536Z" fill="#886CC0"/>
																	<path d="M12.2591 17.6509C12.4835 17.8798 12.79 18.0097 13.1106 18.0117H13.1238C13.4392 18.0107 13.7415 17.8859 13.9657 17.6641L23.6969 8.0424C24.1379 7.54574 24.0929 6.78557 23.5963 6.34449C23.146 5.94461 22.4695 5.93935 22.0131 6.33215L13.1467 15.0987L12.8303 14.7703C12.3705 14.291 11.6092 14.2752 11.1298 14.7351C10.6505 15.195 10.6347 15.9563 11.0946 16.4356C11.0967 16.4378 11.0988 16.44 11.1009 16.4421L12.2591 17.6509Z" fill="#886CC0"/>
																	</g>
																	<defs>
																	<clipPath id="clip2">
																	<rect width="24" height="24" fill="white"/>
																	</clipPath>
																	</defs>
																	</svg>
																</span>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic22.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Kierra Curtis</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
																
															</div>
														</div>
													</div>
													<div class="chat-bx d-flex border-bottom">
														<div class="chat-img">
															<img src="assets/images/contacts/pic33.jpg" alt="">
														</div>
														<div class="w-100">
															<div class="d-flex mb-1 align-items-center">
																<h6 class="mb-0">Skylar Dorwart</h6>
																<small class="ms-auto">2m ago</small>
															</div>	
															<div>
																<p class="mb-0 lh-base">I remember that project due is tomorrow.</p>
															</div>
														</div>
													</div>
													
												</div>

											</div>
											
										  </div>
										  
										
									</div>
									<div class="col-xl-9 col-xxl-8 ps-xl-0">
										<div class="d-flex justify-content-between align-items-center border-bottom px-4 pt-4 flex-wrap">
											<div class="d-flex align-items-center pb-3">
												<div class="fillow-design">
													<a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
												</div>
												<div class="ms-3">
													<h4>Fillow Designer Team</h4>
													<P class="mb-0">We share about daily life as designer in the world</P>
												</div>
											</div>
											
											<div class="activity d-flex align-items-center pb-3">
												<ul class="d-flex">
													<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a><li>
													<li><a href="javascript:void(0);"><i class="fas fa-search"></i></a><li>
													<li><a href="javascript:void(0);"><i class="fas fa-star text-orange"></i></a><li>
												</ul>
												<div class="chat-toogle">	
													<i class="fa-solid fa-list-ul"></i>
												</div>
												<div class="dropdown ms-2">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="var(--primary)"/>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="var(--primary)"/>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="var(--primary)"/>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
												
											</div>
										</div>	
										<div class="chat-box-area dlab-scroll chat-box-area" id="chatArea">
											<div class="chat-box-area dz-scroll" id="chartBox">
												<div class="media my-4  justify-content-start align-items-start">
													<div class="image-box me-sm-3 me-2">
														<img src="assets/images/group/g1.jpg" alt="" class="rounded-circle img-1">
														<span class="active1"></span>
													</div>
													<div class="message-received">
														<p class="mb-1">
															Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat
														</p>
														<small class="text-gray">Sunday, October 24th, 2020  at 4.30 AM</small>
													</div>
												</div>
												<div class="media my-4  justify-content-start align-items-start">
													<div class="image-box me-sm-3 me-2">
														<img src="assets/images/group/g1.jpg" alt="" class="rounded-circle img-1">
														<span class="active1"></span>
													</div>
													<div class="message-received">
														<p class="mb-1 me-5">
															Hey, check my design update last night. Tell me what you think and if that is OK
														</p>
														<small class="text-gray">Sunday, October 24th, 2020  at 4.30 AM</small>
													</div>
												</div>
												<div class="media mb-4 justify-content-end align-items-end">
													<div class="message-sent">
														<p class="mb-1">
															sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
														</p>
														<small class="text-primary">9.30 AM</small>
													</div>
													<div class="image-box ms-sm-3 ms-2 mb-4">
														<img src="assets/images/contacts/3.jpg" alt="" class="rounded-circle img-1">
														<span class="active1"></span>
													</div>
												</div>
												<div class="media mb-4 justify-content-end align-items-end">
													<div class="message-sent">
														<p class="mb-1">
															sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
														</p>
														<small class="text-primary">9.30 AM</small>
													</div>
													<div class="image-box ms-sm-3 ms-2 mb-4">
														<img src="assets/images/contacts/3.jpg" alt="" class="rounded-circle img-1">
														<span class="active1"></span>
													</div>
												</div>
												<div class="media my-4  justify-content-start align-items-start">
													<div class="image-box me-sm-3 me-2">
														<img src="assets/images/group/g1.jpg" alt="" class="rounded-circle img-1">
														<span class="active1"></span>
													</div>
													<div class="message-received">
														<p class="mb-1 me-5">
															Hey, check my design update last night. Tell me what you think and if that is OK
														</p>
														<small class="text-gray">Sunday, October 24th, 2020  at 4.30 AM</small>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer border-0 type-massage">
											<div class="input-group">
												<textarea class="form-control"  rows="3" placeholder="I think we should get that project in this month"></textarea>
											</div>
											<div class="input-group-append d-flex justify-content-between flex-wrap">
												<div>
													<button type="button" class="btn pr-0">
														<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.1203 5.03707C13.662 4.98187 12.5048 4.99997 12.0003 4.99997V2.99997C12.0001 2.82307 11.953 2.64939 11.8638 2.49661C11.7746 2.34384 11.6465 2.21744 11.4926 2.1303C11.3387 2.04315 11.1644 1.99838 10.9875 2.00053C10.8106 2.00269 10.6374 2.0517 10.4857 2.14257L2.48567 6.94257C2.3378 7.03156 2.21546 7.15728 2.13054 7.30751C2.04561 7.45775 2.00098 7.62739 2.00098 7.79997C2.00098 7.97255 2.04561 8.14219 2.13054 8.29243C2.21546 8.44266 2.3378 8.56838 2.48567 8.65737L10.4857 13.4574C10.6374 13.5482 10.8106 13.5972 10.9875 13.5994C11.1644 13.6016 11.3387 13.5568 11.4926 13.4696C11.6465 13.3825 11.7746 13.2561 11.8638 13.1033C11.953 12.9506 12.0001 12.7769 12.0003 12.6V11H14.0003C15.9303 11 18.9903 12.6973 18.9903 17.25C18.9908 17.4696 19.0635 17.6829 19.1972 17.857C19.3309 18.0312 19.5183 18.1566 19.7303 18.2137C19.9423 18.2709 20.1672 18.2568 20.3704 18.1735C20.5736 18.0902 20.7437 17.9424 20.8546 17.7529C21.5751 16.5077 21.9672 15.0998 21.9942 13.6614C22.0211 12.223 21.682 10.8014 21.0087 9.53007C20.3354 8.25873 19.35 7.17941 18.1451 6.39347C16.9401 5.60754 15.5551 5.14079 14.1203 5.03707Z" fill="var(--text-gray)"/>
														</svg>
	
													</button>
													<button type="button" class="btn">
														<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M9.87973 5.03707C10.338 4.98187 11.4952 4.99997 11.9997 4.99997V2.99997C11.9999 2.82307 12.047 2.64939 12.1362 2.49661C12.2254 2.34384 12.3535 2.21744 12.5074 2.1303C12.6613 2.04315 12.8356 1.99838 13.0125 2.00053C13.1894 2.00269 13.3626 2.0517 13.5143 2.14257L21.5143 6.94257C21.6622 7.03156 21.7845 7.15728 21.8695 7.30751C21.9544 7.45775 21.999 7.62739 21.999 7.79997C21.999 7.97255 21.9544 8.14219 21.8695 8.29243C21.7845 8.44266 21.6622 8.56838 21.5143 8.65737L13.5143 13.4574C13.3626 13.5482 13.1894 13.5972 13.0125 13.5994C12.8356 13.6016 12.6613 13.5568 12.5074 13.4696C12.3535 13.3825 12.2254 13.2561 12.1362 13.1033C12.047 12.9506 11.9999 12.7769 11.9997 12.6V11H9.99973C8.06973 11 5.00973 12.6973 5.00973 17.25C5.00923 17.4696 4.93651 17.6829 4.80278 17.857C4.66905 18.0312 4.48174 18.1566 4.26974 18.2137C4.05773 18.2709 3.83279 18.2568 3.62962 18.1735C3.42644 18.0902 3.2563 17.9424 3.14543 17.7529C2.42495 16.5077 2.0328 15.0998 2.00583 13.6614C1.97886 12.223 2.31796 10.8014 2.99125 9.53007C3.66455 8.25873 4.64997 7.17941 5.85493 6.39347C7.05989 5.60754 8.44486 5.14079 9.87973 5.03707Z" fill="var(--text-gray)"/>
														</svg>
													</button>
													<button type="button" class="btn">
														<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M20 1H4C3.46957 1 2.96086 1.21071 2.58579 1.58579C2.21071 1.96086 2 2.46957 2 3V7C2 7.53043 2.21071 8.03914 2.58579 8.41421C2.96086 8.78929 3.46957 9 4 9C4.53043 9 5.03914 8.78929 5.41421 8.41421C5.78929 8.03914 6 7.53043 6 7V5H10V19H8C7.46957 19 6.96086 19.2107 6.58579 19.5858C6.21071 19.9609 6 20.4696 6 21C6 21.5304 6.21071 22.0391 6.58579 22.4142C6.96086 22.7893 7.46957 23 8 23H16C16.5304 23 17.0391 22.7893 17.4142 22.4142C17.7893 22.0391 18 21.5304 18 21C18 20.4696 17.7893 19.9609 17.4142 19.5858C17.0391 19.2107 16.5304 19 16 19H14V5H18V7C18 7.53043 18.2107 8.03914 18.5858 8.41421C18.9609 8.78929 19.4696 9 20 9C20.5304 9 21.0391 8.78929 21.4142 8.41421C21.7893 8.03914 22 7.53043 22 7V3C22 2.46957 21.7893 1.96086 21.4142 1.58579C21.0391 1.21071 20.5304 1 20 1Z" fill="var(--text-gray)"/>
														</svg>
													</button>
													<button type="button" class="btn">
														<svg width="1" height="32" viewBox="0 0 1 32" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="1" height="32" rx="0.5" fill="var(--text-gray)"/>
														</svg>
													</button>
													<button type="button" class="btn">
														<svg width="14" height="16" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M0 17V16.4599L0.409506 16.3313C0.767824 16.1942 1.0067 16.0141 1.12614 15.7912C1.26264 15.5683 1.3309 15.2683 1.3309 14.8911C1.34796 13.9138 1.35649 12.9365 1.35649 11.9592C1.35649 10.9647 1.35649 9.97025 1.35649 8.97579V8.04992C1.35649 7.05547 1.34796 6.06959 1.3309 5.09228C1.3309 4.09783 1.3309 3.10338 1.3309 2.10892C1.3309 1.69743 1.27118 1.3888 1.15174 1.18306C1.0323 0.960161 0.784887 0.788704 0.409506 0.668683L0 0.54009V0H7.21755C9.26508 0 10.7495 0.385779 11.6709 1.15734C12.5923 1.91175 13.053 2.87191 13.053 4.03782C13.053 4.9294 12.7288 5.73525 12.0804 6.45537C11.4321 7.15835 10.2974 7.66415 8.67642 7.97277C10.5533 8.17852 11.9098 8.66717 12.7459 9.43873C13.582 10.2103 14 11.1533 14 12.2678C14 12.8164 13.8806 13.3737 13.6417 13.9395C13.4028 14.4882 12.9933 14.9939 12.4132 15.4569C11.8501 15.9198 11.0823 16.297 10.1097 16.5885C9.13711 16.8628 7.90859 17 6.42413 17H0ZM4.99086 7.79274H6.19378C7.35405 7.79274 8.19013 7.53555 8.70201 7.02118C9.23096 6.48966 9.49543 5.58951 9.49543 4.32073C9.49543 3.0005 9.25655 2.07463 8.77879 1.54312C8.30104 1.0116 7.55027 0.745839 6.52651 0.745839H4.99086V7.79274ZM4.99086 16.2542H6.39854C7.67824 16.2542 8.63376 15.937 9.26508 15.3026C9.8964 14.6682 10.2121 13.648 10.2121 12.2421C10.2121 10.8875 9.90494 9.93596 9.29068 9.38729C8.69348 8.82148 7.70384 8.53858 6.32175 8.53858H4.99086V16.2542Z" fill="var(--text-gray)"/>
														</svg>
													</button>
													<button type="button" class="btn">
														<svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M0 17L0.101695 16.4599L0.737288 16.2284C0.974576 16.1599 1.16102 16.0398 1.29661 15.8684C1.44915 15.6798 1.55085 15.474 1.60169 15.2511L2.94915 7.97277C3.11864 7.02975 3.29661 6.01815 3.48305 4.93797C3.68644 3.84064 3.86441 2.79475 4.01695 1.8003C4.0678 1.56026 4.02542 1.33737 3.88983 1.13162C3.77119 0.908723 3.59322 0.762985 3.35593 0.694403L2.89831 0.54009L3.02542 0H9L8.87288 0.54009L8.26271 0.745839C7.77119 0.883005 7.48305 1.20877 7.39831 1.72315L6.02542 9.02723C5.85593 9.97025 5.67797 10.9818 5.49153 12.062C5.30508 13.1422 5.11864 14.171 4.9322 15.1483C4.8983 15.4054 4.94068 15.6369 5.05932 15.8427C5.17797 16.0484 5.34746 16.1942 5.5678 16.2799L6.1017 16.4599L5.97458 17H0Z" fill="var(--text-gray)"/>
														</svg>
													</button>
													<button type="button" class="btn">	
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M8.21951 17C7 17 5.9187 16.7743 4.97561 16.323C4.04878 15.8717 3.31707 15.1613 2.78049 14.1917C2.26016 13.2055 2 11.91 2 10.3053V7.59734C2 6.66126 2 5.71681 2 4.76401C2 3.81121 1.99187 2.85005 1.97561 1.88053C1.97561 1.22861 1.6748 0.819076 1.07317 0.651916L0.536585 0.526548V0H7.12195V0.526548L6.43902 0.676991C5.82114 0.827434 5.5122 1.24533 5.5122 1.93068C5.49593 2.86676 5.48781 3.81121 5.48781 4.76401C5.48781 5.7001 5.48781 6.64454 5.48781 7.59734V10.7817C5.48781 12.4031 5.80488 13.5733 6.43902 14.292C7.08943 15.0108 8.00813 15.3702 9.19512 15.3702C10.4472 15.3702 11.4228 14.9857 12.122 14.2168C12.8374 13.4312 13.1951 12.2694 13.1951 10.7316V2.0059C13.1951 1.67158 13.1301 1.37906 13 1.12832C12.8699 0.87758 12.6423 0.71878 12.3171 0.651916L11.7317 0.526548V0H15.4878V0.526548L14.8049 0.676991C14.4959 0.743854 14.2846 0.894296 14.1707 1.12832C14.0569 1.36234 14 1.64651 14 1.98083V10.5811C14 12.6539 13.4715 14.2419 12.4146 15.3451C11.3577 16.4484 9.95935 17 8.21951 17Z" fill="#717579"/>
															<path d="M0 9.35251H16V10.6062H0V9.35251Z" fill="var(--text-gray)"/>
														</svg>
													</button>
												</div>
												<div>
													<button type="button" class="btn pr-0"><i class="fas fa-smile scale5 text-primary"></i></button>
													<input type="file" id="attachmentInput" style="display: none;">
													<button type="button" id="attachButton" class="btn"><i class="fas fa-paperclip scale5 text-primary"></i></button>
													<button type="button" class="btn btn-primary rounded text-white"><i class="far fa-paper-plane me-2"></i>SEND</button>
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
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<label class="form-label d-block">Enter Name</label>
				<input type="text" class="form-control w-100" placeholder="Name">
				
				<label  class="form-label d-block mt-3">Enter Position</label>
				<input type="text" class="form-control w-100" placeholder="position">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		</div>
	</div>	
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'elements/page-js.php'; ?>

	<script>
		$(".chat-toogle").on('click', function(){
		$(' .chat-left-body ,.chat-toogle').toggleClass("active");
	  });
		
	  

		$(document).ready(function() {
		// When the "Attach" button is clicked
		$("#attachButton").click(function() {
			// Trigger the hidden file input
			$("#attachmentInput").trigger("click");
		});

		// When a file is selected
		$("#attachmentInput").change(function() {
			var files = this.files;
			var fileList = "";

			// Display the selected files in a list
			for (var i = 0; i < files.length; i++) {
			fileList += "<div>" + files[i].name + "</div>";
			}

			// Append the list to a container
			$("#attachedFiles").php(fileList);
		});
		});


	</script>

</body>
</html>