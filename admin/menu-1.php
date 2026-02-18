<?php 
	 require_once __DIR__ . '/config/dz.php';
	 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- PAGE TITLE HERE -->
	<title><?php echo $DexignZoneSettings['site_level']['site_title'] ?></title>


	<?php include 'elements/meta.php';?>
 
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
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class=" row page-titles">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
								<li class="breadcrumb-item active"><a href="javascript:void(0)">Menus</a></li>
							</ol>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									<i class="fa fa-list-alt me-2"></i>Menu
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-xl-3 col-xxl-3 col-lg-4 mb-lg-0 mb-3">
											<h6 class="mb-0">Select a menu to edit: <span class="required"></span></h6>
										</div>
										<div class="col-xl-6 col-xxl-5 col-lg-4 mb-lg-0 mb-3">
											<select class="form-control default-select wide">
												<option value="AL">Select Menu</option>
												<option value="WY">India</option>
												<option value="WY">Information</option>
												<option value="WY">New Menu</option>
												<option value="WY">Page Menu</option>
											</select>
										</div>
										<div class="col-xl-3 col-xxl-4 col-lg-4">
											<a href="javascript:void(0);" class="btn btn-primary">Select</a>
											<span class="mx-2 d-inline-block">or</span>
											<a href="javascript:void(0);" class="text-primary">Create new menu</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4">
								<div class="filter cm-content-box box-primary">
									<div class="content-title SlideToolHeader">
										<div class="cpa">
											Menus
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body form excerpt">
										<div class="card-body">
											<div class="filter cm-content-box box-primary border">
												<div class="content-title SlideToolHeader border-0">
													<div class="cpa">
														Page
													</div>
													<div class="tools">
														<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
													</div>
												</div>
												<div class="cm-content-body form excerpt border-top">
													<div class="card-body ItemsCheckboxSec p-sm-4">
														<ul class=" tab-my nav nav-tabs" id="myTab" role="tablist">
														  <li class="nav-item" role="presentation">
															<button class="nav-link active" id="Viewall-tab" data-bs-toggle="tab" data-bs-target="#Viewall-tab-pane" type="button" role="tab" aria-controls="Viewall-tab-pane" aria-selected="true">View All</button>
														  </li>
														  <li class="nav-item" role="presentation">
															<button class="nav-link" id="Search-tab" data-bs-toggle="tab" data-bs-target="#Search-tab-pane" type="button" role="tab" aria-controls="Search-tab-pane" aria-selected="false">Search</button>
														  </li>
													 
														</ul>

														<div class="tab-content" id="myTabContent">
															<div class="tab-pane fade show active" id="Viewall-tab-pane" role="tabpanel" aria-labelledby="Viewall-tab" tabindex="0">
																<div class="menu-tabs">
																	<div class="form-check">
																	  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
																	  <label class="form-check-label" for="flexCheckDefault">
																		Privacy Policy 
																	  </label>
																	</div>
																	<div class="form-check">
																	  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
																	  <label class="form-check-label" for="flexCheckDefault-1">
																		Contact Us 
																	  </label>
																	</div>
																	<div class="form-check">
																	  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
																	  <label class="form-check-label" for="flexCheckDefault-2">
																		Important Information 
																	  </label>
																	</div>
																	<div class="form-check">
																	  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
																	  <label class="form-check-label" for="flexCheckDefault-3">
																		About Us 
																	  </label>
																	</div>
																	<div class="form-check">
																	  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
																	  <label class="form-check-label" for="flexCheckDefault-4">
																		Dummy Co 
																	  </label>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="Search-tab-pane" role="tabpanel" aria-labelledby="Search-tab" tabindex="0">
																	<div class="menu-tabs">
																	  <label for="exampleFormControlInput1" class="form-label">Search</label>
																	  <input type="text" class="form-control solid" id="exampleFormControlInput1" placeholder="Enter Page Name">
																	</div>
															</div>
															<div class="d-flex align-items-center flex-wrap mb-2">
																
																<a href="javascript:void(0);" class="checkAllInput text-hover">Select All</a><span class="mx-2">|</span>
																<a href="javascript:void(0);" class="unCheckAllInput text-hover">Deselect All</a>
															</div>
															<a  class="btn btn-primary btn-sm dz-menu-btn">Add to Menu</a>
														</div>
													</div>
													
												</div>
											</div>
											<div class="filter cm-content-box box-primary border">
												<div class="content-title border-0 SlideToolHeader">
													<div class="cpa">
														Links 
													</div>
													<div class="tools">
														<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
													</div>
												</div>
												<div class="cm-content-body form excerpt border-top">
													<div class="card-body">
														<div class="row align-items-center">
															<div class="col-4 mb-3">
																<label class="form-label mb-0">URL :</label>
															</div>
															<div class="col-8 mb-3">
																 <input type="text" class="form-control solid" placeholder="">
															</div>
															<div class="col-4">
																<label class="form-label mb-0">Link Text :</label>
															</div>
															<div class="col-8">
																 <input type="text" class="form-control solid" placeholder="Menu items">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="filter cm-content-box box-primary">
									<div class="content-title d-sm-flex d-block flex-wrap">
										<div class="cpa d-flex align-items-center flex-wrap">
											<span class="pe-3 pb-sm-0 pb-3">Menu Name</span>
											<input type="text" class="form-control w-auto mb-sm-0 mb-3" placeholder="information">
										</div>
										<button type="button" class="btn btn-secondary btn-sm ms-sm-auto mb-2 mb-sm-0">Save Menu</button>
									</div>
									<div class="cm-content-body form excerpt rounded-0">
										<div class="card-body">
											<h6 class="mb-1">Menu Structure</h6>
											<p class="fs-13 mb-4">Add menu items from the column on the left.</p>
											<div class="col-xl-7">
												<div class="dd" id="nestable">
													<ol class="dd-list accordion" id="accordionExample">
														<!-- <div class="dd-handle"></div> -->
														
														<li class="accordion-item dd-item menu-ac-item" data-id="1">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
															  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																Contact Us
															  </button>
															</div>
															<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
															  	<div class="accordion-body">
																	<form>
																		<div class="row">
																			<div class="col-xl-12">
																				<div class="mb-3">
																					<label class="form-label">URL</label>
																					<input type="text" class="form-control solid" placeholder="https://bodyclub.dexignzone.com/xhtml/about-us.php">
																				</div>											
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Navigation Label</label>
																					<input type="text" class="form-control solid" placeholder="Contact Us">
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Title Attribute</label>
																					<input type="text" class="form-control solid" placeholder="Contact Us">
																				</div>
																			</div>
																			<div class="d-flex align-items-center">
																				<a class="text-hover remove" href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
																				<a  class="text-hover cancel" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																				Cancel
																				</a>
																			</div>
																		</div>	
																	</form>											
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="2">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
															  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																Privacy Policy
															  </button>
															</div>
															<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<form>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Navigation Label</label>
																					<input type="text" class="form-control solid" placeholder="Privacy Policy">
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Title Attribute</label>
																					<input type="text" class="form-control solid" placeholder="Privacy Policy">
																				</div>
																			</div>
																			<div class="col-xl-12">
																				<p class="dz-terms">Original: <a href="javascript:void(0);">Privacy Policy</a></p>
																			</div>
																			<div class="d-flex align-items-center">
																				<a  class="text-hover remove" href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
																				<a  class="text-hover cancel" href="javascript:void(0);"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																				Cancel
																			</a>
																			</div>
																		</div>		
																	</form>										
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="3">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
															  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																Terms and Conditions
															  </button>
															</div>
															<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<form>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Navigation Label</label>
																					<input type="text" class="form-control solid" placeholder="Terms and Conditions">
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Title Attribute</label>
																					<input type="text" class="form-control solid" placeholder="Terms and Conditions">
																				</div>
																			</div>
																			<div class="col-xl-12">
																				<p class="dz-terms">Original: <a href="javascript:void(0);">Terms and Conditions</a></p>
																			</div>
																			<div class="d-flex align-items-center">
																				<a  class="text-hover remove" href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
																				<a  class="text-hover cancel" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																				Cancel
																				</a>
																			</div>
																		</div>												
																	</form>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="4">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
															  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
																About Us
															  </button>
															</div>
															<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<form>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Navigation Label</label>
																					<input type="text" class="form-control solid" placeholder="About Us">
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Title Attribute</label>
																					<input type="text" class="form-control solid" placeholder="About Us">
																				</div>
																			</div>
																			<div class="col-xl-12">
																				<p class="dz-terms">Original: <a href="javascript:void(0);">About Us</a></p>
																			</div>
																			<div class="d-flex align-items-center">
																				<a  class="text-hover remove" href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
																				<a  class="text-hover cancel" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
																				Cancel
																				</a>
																			</div>
																		</div>												
																	</form>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="5">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
															  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
																Important Information
															  </button>
															</div>
															<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<form>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Navigation Label</label>
																					<input type="text" class="form-control solid" placeholder="Important Information">
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="mb-3">
																					<label  class="form-label">Title Attribute</label>
																					<input type="text" class="form-control solid" placeholder="">
																				</div>
																			</div>
																			<div class="col-xl-12">
																				<p class="dz-terms">Original: <a href="javascript:void(0);">Terms and Conditions</a></p>
																			</div>
																			<div class="d-flex align-items-center">
																				<a href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
																				<a href="javascript:void(0);"   data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
																				Cancel
																				</a>
																			</div>
																		</div>		
																	</form>										
																</div>
															</div>
														</li>
													</ol>
												</div>
											</div>
										</div>		
									</div>
									<div class="filter cm-content-box box-primary style-1 mb-0 border-0">
										<div class="content-title">
											<div class="cpa">
												Delete Menu
											</div>
											<button type="button" class="btn btn-secondary btn-sm">Save Menu</button>
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