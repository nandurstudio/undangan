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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Compose</a></li>
					</ol>
                </div>
				
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
								<div class="row">
									<div class="col-xl-3">
										<div class="email-left-box email-left-body">
											<div class="mb-3 mt-4 mt-sm-0">
												<div class="p-0">
													<a href="email-compose.php" class="btn btn-primary btn-block">Compose</a>
												</div>
												<div class="mail-list rounded mt-4">
													<a href="email-inbox.php" class="list-group-item active"><i
															class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
															class="badge badge-secondary badge-sm float-end">198</span> </a>
													<a href="javascript:void()" class="list-group-item"><i
															class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
															class="fas fa-star font-18 align-middle me-2"></i>Important <span
															class="badge badge-danger text-white badge-sm float-end">47</span>
													</a>
													<a href="javascript:void()" class="list-group-item"><i
															class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
															class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
												</div>
												<div class="mail-list rounded overflow-hidden mt-4">
													<div class="intro-title d-flex justify-content-between mt-0">
														<h5>Categories</h5>
													</div>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-warning"><i
																class="fa fa-circle"></i></span>
														Work </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-primary"><i
																class="fa fa-circle"></i></span>
														Private </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-success"><i
																class="fa fa-circle"></i></span>
														Support </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-dpink"><i
																class="fa fa-circle"></i></span>
														Social </a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9">
										<div>
											<div class="d-flex align-items-center">
												<h4 class="card-title d-sm-none d-block">Email</h4>
												<div class="email-tools-box float-end mb-2">	
													<i class="fa-solid fa-list-ul"></i>
												</div>
											</div>
											
											<div class="compose-content">
												<form action="#">
													<div class="mb-3">
														<input type="text" class="form-control bg-transparent" placeholder=" To:">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control bg-transparent" placeholder=" Subject:">
													</div>
													<div class="mb-3">
														<textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="8" placeholder="Enter text ..."></textarea>
													</div>
												</form>
												<h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
												<form action="#" class="dropzone">
													<div class="fallback">
														<input name="file" type="file" multiple>
													</div>
												</form>
											</div>
											<div class="text-start mt-4 mb-3">
												<button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
												<button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
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
	<script>
		
		
	</script>
</body>
</html>