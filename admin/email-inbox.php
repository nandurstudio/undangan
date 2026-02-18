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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
					</ol>
                </div>
                <!-- row -->
               <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
								<div class="row">
									<div class="col-xl-3">
										<div class="email-left-body email-left-box ">
											<div class="mb-3 mt-4 mt-sm-0">
												<div class="p-0">
													<a href="email-compose.php" class="btn btn-primary btn-block">Compose</a>
												</div>
												<div class="mail-list rounded mt-4">
													<a href="email-inbox.php" class="list-group-item active"><i
															class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
															class="badge badge-secondary badge-sm float-end">198</span> </a>
													<a href="javascript:void()" class="list-group-item"><i
															class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a> <a href="javascript:void(0);" class="list-group-item"><i
															class="fa fa-star font-18 align-middle me-2"></i>Important <span
															class="badge badge-danger text-white badge-sm float-end">47</span>
													</a>
													<a href="javascript:void()" class="list-group-item"><i
															class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void(0);" class="list-group-item"><i
															class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
												</div>
												<div class="mail-list rounded overflow-hidden">
													<div class="intro-title d-flex justify-content-between mt-0">
														<h5>Categories</h5>
													</div>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-warning"><i
																class="fa fa-circle" aria-hidden="true"></i></span>
														Work </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-primary"><i
																class="fa fa-circle" aria-hidden="true"></i></span>
														Private </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-success"><i
																class="fa fa-circle" aria-hidden="true"></i></span>
														Support </a>
													<a href="email-inbox.php" class="list-group-item"><span class="icon-dpink"><i
																class="fa fa-circle" aria-hidden="true"></i></span>
														Social </a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9 dlab-scroll height720">
										<div>
											<div role="toolbar" class="toolbar ms-1 ms-sm-0 ms-xl-1 d-flex align-items-center">
												<div class="btn-group mb-1">
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="checkAll">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</div>
												<div class="btn-group mb-1">
													<button class="btn btn-primary light px-3" type="button"><i class="ti-reload"></i>
													</button>
												</div>
												<div class="btn-group mb-1">
													<button aria-expanded="false" data-bs-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle mx-2" type="button">More <span
															class="caret"></span>
													</button>
													<div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
														<a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>
													</div>
												</div>
												<div class="email-tools-box">
													<i class="fa-solid fa-list-ul"></i>
												</div>
												<form class=" d-none d-sm-block ms-auto">
													<div class="input-group  ms-auto w-100 d-sm-inline-flex d-none">
														<input type="text" class="form-control" placeholder="Search here">
														<span class="input-group-text"><button class="bg-transparent border-0"><i class="flaticon-381-search-2"></i></button></span>
													</div>
												</form>
											</div>
											<div class="email-list mt-3">
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox2">
																	<label class="form-check-label" for="checkbox2"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox3">
																	<label class="form-check-label" for="checkbox3"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox4">
																	<label class="form-check-label" for="checkbox4"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox5">
																	<label class="form-check-label" for="checkbox5"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox6">
																	<label class="form-check-label" for="checkbox6"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox7">
																	<label class="form-check-label" for="checkbox7"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox8">
																	<label class="form-check-label" for="checkbox8"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox9">
																	<label class="form-check-label" for="checkbox9"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox10">
																	<label class="form-check-label" for="checkbox10"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox11">
																	<label class="form-check-label" for="checkbox11"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox12">
																	<label class="form-check-label" for="checkbox12"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox13">
																	<label class="form-check-label" for="checkbox13"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox14">
																	<label class="form-check-label" for="checkbox14"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox15">
																	<label class="form-check-label" for="checkbox15"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox16">
																	<label class="form-check-label" for="checkbox16"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox17">
																	<label class="form-check-label" for="checkbox17"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox18">
																	<label class="form-check-label" for="checkbox18"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox19">
																	<label class="form-check-label" for="checkbox19"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox20">
																	<label class="form-check-label" for="checkbox20"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="checkbox21">
																	<label class="form-check-label" for="checkbox21"></label>
																</div>
															</div>
															<div class="ms-2">
																<button class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star" aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
											</div>
											<!-- panel -->
											<div class="row mt-4">
												<div class="col-12 ps-3">
													<nav>
														<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg justify-content-center justify-content-xl-start ">
															<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
															<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
															<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
															<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
														</ul>
													</nav>
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
	<script>
		$(".fa.fa-star").click(function () {
		  $(this).toggleClass("yellow");
		});
	</script>
	
</body>
</html>