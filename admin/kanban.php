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
					<div class="col-xl-12 px-3">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div>
										<h3>Fillow Company Profile Website Phase 1</h3>
										<span>Created by <strong class="text-black">Hajime Mahmuden</strong> on June 31, 2020</span>
										<div class="d-flex align-items-center mt-4 flex-wrap">
											<ul class="kanbanimg me-3">
												<li><img src="assets/images/profile/small/pic1.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic2.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic3.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic4.jpg" alt=""></li>
												<li><img src="assets/images/profile/small/pic5.jpg" alt=""></li>
												<li><span>5+</span></li>
											</ul>
											<div class="ms-xl-4 ms-0 my-3 my-sm-0 invite">
												<a href="javascript:void(0);" class="btn btn-primary light btn-rounded mb-sm-0 mb-2 me-2 btn-sm"><i class="fas fa-user-plus me-3 scale2"></i>Invite People</a>
												<a href="javascript:void(0);" class="btn btn-primary light btn-rounded btn-sm"><i class="far fa-comment-alt scale2 me-3"></i>45 Comments</a>
											</div>
										</div>	
									</div>
									<div class="mt-xl-0 mt-3">
										<div class="d-flex align-items-center mb-xl-4 mb-0 pb-3 justify-content-end flex-wrap">
											<div class="me-3">
												<h4>Fillow Studios</h4>
												<p class="mb-0">Software House</p>
											</div>
											<div class="facebook-icon me-3">
												<a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
											</div>
											<div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
										<div class="d-flex  justify-content-end align-items-center">
											<h6 class="me-3 mb-0">Total Progress 60%</h6>
											<div class="progress default-progress flex-1">
												<div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; height:8px;" role="progressbar">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					
				</div>	
				<div class="row kanban-bx px-3">
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">To-Do List (<span class="totalCount">24</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7"/>
												</svg>
												Deisgner
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<span class="fs-14"><i class="far fa-clock me-2"></i>Due in 4 days</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-warning">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFCF6D"/>
												</svg>
												Important
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Visual Graphic for Presentation to Client</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-warning progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic222.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">Done(<span class="totalCount">3</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53"/>
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53"/>
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7"/>
												</svg>
												HTML
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">On Progress(<span class="totalCount">2</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-success">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#09BD3C"/>
												</svg>
												UPDATE
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-success progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-info">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#D653C1"/>
												</svg>
												Video
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-info progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 px-0">
						<div class="kanbanPreview-bx">
							<div class="draggable-zone dropzoneContainer">
								<div class="sub-card align-items-center d-flex justify-content-between mb-4">
									<div>
										<h4 class="mb-0">Done(<span class="totalCount">3</span>)</h4>
									</div>
									<div class="plus-bx">
										<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"></i></a>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53"/>
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="text-danger">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FC2E53"/>
												</svg>
												BUGS FIXING
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Update information in footer section</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-danger progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card draggable-handle draggable">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-2">
											<span class="sub-title">
												<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="5" cy="5" r="5" fill="#FFA7D7"/>
												</svg>
												HTML
											</span>
											<div class="dropdown">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
														<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
														<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<h5 class="mb-0"><a href="javascript:void(0);" class="text-black">Create wireframe for landing page phase 1</a></h5>
										<div class="progress default-progress my-4">
											<div class="progress-bar bg-design progress-animated" style="width: 45%; height:7px;" role="progressbar">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
										<div class="row justify-content-between align-items-center kanban-user">
											<ul class="users col-6">
												<li><img src="assets/images/contacts/pic11.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic22.jpg" alt=""></li>
												<li><img src="assets/images/contacts/pic33.jpg" alt=""></li>
											</ul>
											<div class="col-6 d-flex justify-content-end">
												<p class="mb-0"><i class="far fa-clock me-2"></i>Due in 4 days</p>
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
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Kanban title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<label  class="form-label d-block">Enter Name</label>
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