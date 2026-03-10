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
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="input-group contacts-search mb-4">
						<input type="text" class="form-control" placeholder="Search here...">
						<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
					</div>
					<div class="mb-4">
						
						<a href="#" class="add btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">+ New Contact</a>
					</div>
				</div>	
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic1.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Jakob Gouse</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Highspeed Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic2.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Gretchen Aminoff</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Redblue Studios</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- start -->
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic3.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Davis Siphron</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Beep Beep Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic4.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Zaire Lubin</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Highspeed Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic4.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Zaire Lubin</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Redblue Studios</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic3.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Davis Siphron</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Highspeed Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic4.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Gretchen Aminoff</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Redblue Studios</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic2.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Zaire Lubin</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Redblue Studios</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic4.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Jakob Gouse</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Highspeed Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic3.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Davis Siphron</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Beep Beep Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3 col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic6.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Zaire Lubin</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Highspeed Inc.</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-3  col-md-4 col-sm-6 items">
								<div class="card contact-bx item-content">
									<div class="card-header border-0">
										<div class="action-dropdown">
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
									</div>
									<div class="card-body user-profile">
										<div class="image-bx">
											<img src="assets/images/pic5.jpg" data-src="assets/images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
											<span class="active"></span>
										</div>
										<div class="media-body user-meta-info">
											<h5 class="mb-0"><a href="app-profile.php" class="text-black user-name" data-name="Alan Green">Gretchen Aminoff</a></h5>
											<p class=" mb-3" data-occupation="UI Designer">Redblue Studios</p>
											<ul>
												<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fas fa-video"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
						<div class="mb-sm-0 mb-3">
							<p class="mb-0 text-black">Showing 5 of 102 Data</p>
						</div>
						 <nav>
							<ul class="pagination pagination-circle mb-0">
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
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Contact title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<label class="form-label d-block">Enter Name</label>
				<input type="text" class="form-control w-100" placeholder="Name">
				
				<label class="form-label d-block mt-3">Enter Position</label>
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
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'elements/page-js.php'; ?>
	

</body>
</html>