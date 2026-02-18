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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Product-List</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i><li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$320.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
											<div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fas fa-star-half-alt"></i><li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$325.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$480.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/5.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$658.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$280.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-lg-12 col-xl-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="assets/images/product/7.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.php">Solid Women's V-neck Dark T-Shirt</a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
												<p class="price">$600.00</p>
                                            </div>
                                            <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Product code: <span class="item">0405689</span> </p>
                                            <p>Brand: <span class="item">Lee</span></p>
                                            <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal">
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="assets/images/avatar/1.jpg" alt="DexignZone">
										</div>
										<div class="mb-3">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
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