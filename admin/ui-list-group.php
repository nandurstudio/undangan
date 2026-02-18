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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">List Group</a></li>
					</ol>
                </div>
                <!-- row -->

                <!-- row -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic List Group</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Active items</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item active">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Disabled items</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Links and buttons items</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <div class="list-group"><a href="javascript:void()" class="list-group-item list-group-item-action active">Cras
                                            justo odio </a><a href="javascript:void()" class="list-group-item list-group-item-action">Dapibus
                                            ac facilisis in</a> <a href="javascript:void()" class="list-group-item list-group-item-action">Morbi
                                            leo risus</a>
                                        <a href="javascript:void()" class="list-group-item list-group-item-action">Porta
                                            ac consectetur
                                            ac</a> <a href="javascript:void()" class="list-group-item list-group-item-action disabled">Vestibulum
                                            at eros</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Flush</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">With badges</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cras justo odio <span class="badge badge-primary badge-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Dapibus ac facilisis in <span class="badge badge-primary badge-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cras justo odio <span class="badge badge-primary badge-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Morbi leo risus <span class="badge badge-primary badge-pill">1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Morbi leo risus <span class="badge badge-primary badge-pill">1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom content</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <div class="list-group">
                                        <a href="javascript:void()" class="list-group-item list-group-item-action flex-column align-items-start active">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-3 text-white">List group item heading</h5><small>3 days
                                                    ago</small>
                                            </div>
                                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi
                                                porta.</small>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-3">List group item heading</h5><small class="text-muted">3
                                                    days ago</small>
                                            </div>
                                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec
                                                id elit non mi porta.</small>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-3">List group item heading</h5><small class="text-muted">3
                                                    days ago</small>
                                            </div>
                                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec
                                                id elit non mi porta.</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contextual</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                                        <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                                        <li class="list-group-item list-group-item-success">This is a success list group item</li>
                                        <li class="list-group-item list-group-item-danger">This is a danger list group item
                                        </li>
                                        <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                                        <li class="list-group-item list-group-item-info">This is a info list group item
                                        </li>
                                        <li class="list-group-item list-group-item-light">This is a light list group item
                                        </li>
                                        <li class="list-group-item list-group-item-dark">This is a dark list group item
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Tab</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-list-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-2">
                                            <div class="list-group mb-4 " id="list-tab" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab">Home</a> <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                    data-bs-toggle="list" href="#list-profile" role="tab">Profile</a> <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab">Messages</a>
                                                <a
                                                    class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab">Settings</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-10">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home">
                                                    <h4 class="mb-4">Home Tab Content</h4>
                                                    <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
                                                        occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in
                                                        cupidatat nisi enim eu nostrud do aliquip veniam minim.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel">
                                                    <h4 class="mb-4">Profile Tab Content</h4>
                                                    <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                                        incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                                        commodo veniam incididunt veniam ad.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-messages">
                                                    <h4 class="mb-4">Message Tab Content</h4>
                                                    <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
                                                        enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                                                        Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
                                                </div>
                                                <div class="tab-pane fade" id="list-settings">
                                                    <h4 class="mb-4">Settings Tab Content</h4>
                                                    <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute
                                                        est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna
                                                        labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
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
</body>
</html>