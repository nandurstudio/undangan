<?php 
	 require_once __DIR__ . '/config/dz.php';
	 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>


	<?php include 'elements/meta.php';?>
	
	
    <!-- Custom Stylesheet -->
	
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
					</ol>
				</div>
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-4">
								<div class="filter cm-content-box box-primary">
									<div class="content-title SlideToolHeader">
										<div class="cpa">
											Add Blog Category
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body  form excerpt">
										<div class="card-body">
											<div class="mb-3">
											  <label  class="form-label">Name</label>
											  <input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="mb-3">
												  <label  class="form-label">Slug</label>
												  <input type="text" class="form-control" placeholder="Slug">
											</div>
											<div class="mb-3">
											  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
											  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
											</div>
											<div>
												<button type="button" class="btn btn-primary">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="filter cm-content-box box-primary">
									<div class="content-title SlideToolHeader">
										<div class="cpa">
											Blog List
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body publish-content form excerpt">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-striped verticle-middle table-responsive-sm">
													<thead>
														<tr>
															<th scope="col">S.No</th>
															<th scope="col">name</th>
															<th scope="col">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Beauty</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
															
														</tr>
														<tr>
															<td>2</td>
															<td>Fashion</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Lifestyle</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
															
															
														</tr>
														<tr>
															<td>4</td>
															<td>Food</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Beauty</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Fashion</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>7</td>
															<td>Lifestyle</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>8</td>
															<td>Food</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>9</td>
															<td>Lifestyle</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>10</td>
															<td>Food</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>11</td>
															<td>Fashion</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>12</td>
															<td>Lifestyle</td>
															<td>
																<div class="">
																	<a href="javascript:void(0);" class="text-hover">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);" class="text-hover">delete</a>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
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
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'elements/page-js.php'; ?>
</body>
</html>