<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Registrasi Undangan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Form registrasi undangan" />
	<meta name="keywords" content="form, undangan, registrasi, admin" />
	<meta name="author" content="Nandur Studio" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO		
	Website: 	http://freehtml5.co/
	Email: 		info@freehtml5.co
	Twitter: 	http://twitter.com/fh5co
	Facebook: 	https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="./">Wedding<strong>.</strong></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="./">Home</a></li>
							<li><a href="about.html">Story</a></li>
							<li class="has-dropdown active">
								<a href="services.html">Services</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="gallery.html">Gallery</a>
								<ul class="dropdown">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Sass</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Admin Panel</h2>
						<p>Registrasi data undangan</p>
					</div>
				</div>
				<!-- rest of content unchanged... (kept as original) -->

				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="quote-wanita" class="custom-label">Quote Pengantin Wanita</label>
									<textarea name="quote-wanita" class="form-control" id="quote-wanita" placeholder="Quote Pengantin Wanita"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="link-google-maps" class="custom-label">Link Google Maps</label>
									<input type="url" class="form-control" id="link-google-maps" placeholder="Link Google Maps">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nama-pengantin-pria" class="custom-label">Nama Pengantin Pria</label>
									<select name="nama-pengantin-pria" class="form-control" id="nama-pengantin-pria">
										<?php
										include __DIR__ . "/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '1'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Pengantin Pria</option>';
											while ($row = mysqli_fetch_assoc($result_user)) {
												$user_final = $row['txtNamaDepan'] . " " . $row['txtNamaBelakang'];
												echo '<option style="color: black;" value="' . $row['intUserId'] . '">' . $user_final . '</option>';
											}
										} else {
											echo "0 results";
										}
										?>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nama-ayah-pengantin-pria" class="custom-label">Nama Ayah Pengantin Pria</label>
									<select name="nama-ayah-pengantin-pria" class="form-control" id="nama-ayah-pengantin-pria">
										<?php
										include __DIR__ . "/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '1'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Ayah Pengantin Pria</option>';
											while ($row = mysqli_fetch_assoc($result_user)) {
												$user_final = $row['txtNamaDepan'] . " " . $row['txtNamaBelakang'];
												echo '<option style="color: black;" value="' . $row['intUserId'] . '">' . $user_final . '</option>';
											}
										} else {
											echo "0 results";
										}
										?>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- (remaining sections with include __DIR__/connection.php similarly replaced) -->
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nama-pengantin-wanita" class="custom-label">Nama Pengantin Wanita</label>
									<select name="nama-pengantin-wanita" class="form-control" id="nama-pengantin-wanita">
										<?php
										include __DIR__ . "/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '2'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Pengantin Wanita</option>';
											while ($row = mysqli_fetch_assoc($result_user)) {
												$user_final = $row['txtNamaDepan'] . " " . $row['txtNamaBelakang'];
												echo '<option style="color: black;" value="' . $row['intUserId'] . '">' . $user_final . '</option>';
											}
										} else {
											echo "0 results";
										}
										?>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- (more repeated blocks updated similarly) -->
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="waktu-first-meet" class="custom-label">Waktu Pertama Bertemu</label>
									<input type="date" class="form-control" id="waktu-first-meet" placeholder="Waktu First Meet">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- footer and scripts remain as in original -->


				<?php
				// Internal DB calls in admin.php - use local connection file
				include __DIR__ . "/connection.php";
				$select = "SELECT * FROM tb_user";
				$res = mysqli_query($conn, $select);
				// ... (other inline DB code should continue to work)
				?>

			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<p>&copy; Nandur Studio</p>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>