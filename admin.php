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
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

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
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="custom-label">Email</label>
								<input type="email" class="form-control" id="email" placeholder="founder@nandurstudio.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
							</div>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="header" class="custom-label">Header</label>
									<input type="text" class="form-control" id="header" placeholder="Wedding">
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
									<label for="subtitle" class="custom-label">Subtitle</label>
									<input type="text" class="form-control" id="subtitle" placeholder="We Are Getting Married">
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
									<label for="waktu-akad" class="custom-label">Waktu Akad</label>
									<input type="datetime-local" class="form-control" id="waktu-akad" placeholder="Waktu Akad">
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
									<label for="waktu-resepsi" class="custom-label">Waktu Resepsi</label>
									<input type="datetime-local" class="form-control" id="waktu-resepsi" placeholder="Waktu Resepsi">
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
									<label for="alamat-akad" class="custom-label">Alamat Akad</label>
									<textarea name="alamat-akad" class="form-control" id="alamat-akad" placeholder="Alamat Akad"></textarea>
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
									<label for="alamat-resepsi" class="custom-label">Alamat Resepsi</label>
									<textarea name="alamat-resepsi" class="form-control" id="alamat-resepsi" placeholder="Alamat Resepsi"></textarea>
									<input type="checkbox" id="cb-alamat-resepsi" name="cb-alamat-resepsi" value="sama-dengan-akad">
									<label for="cb-alamat-resepsi">Alamat resepsi sama dengan alamat akad</label>
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
									<label for="quote-pria" class="custom-label">Quote Pengantin Pria</label>
									<textarea name="quote-pria" class="form-control" id="quote-pria" placeholder="Quote Pengantin Pria"></textarea>
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
										include "./php/connection.php";
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
										include "./php/connection.php";
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
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nama-ibu-pengantin-pria" class="custom-label">Nama Ibu Pengantin Pria</label>
									<select name="nama-ibu-pengantin-pria" class="form-control" id="nama-ibu-pengantin-pria">
										<?php
										include "./php/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '2'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Ibu Pengantin Pria</option>';
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
									<label for="nama-pengantin-wanita" class="custom-label">Nama Pengantin Wanita</label>
									<select name="nama-pengantin-wanita" class="form-control" id="nama-pengantin-wanita">
										<?php
										include "./php/connection.php";
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
				<div class="row animate-box">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nama-ayah-pengantin-wanita" class="custom-label">Nama Ayah Pengantin Wanita</label>
									<select name="nama-ayah-pengantin-wanita" class="form-control" id="nama-ayah-pengantin-wanita">
										<?php
										include "./php/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '1'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Ayah Pengantin Wanita</option>';
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
									<label for="nama-ibu-pengantin-wanita" class="custom-label">Nama Ibu Pengantin Wanita</label>
									<select name="nama-ibu-pengantin-wanita" class="form-control" id="nama-ibu-pengantin-wanita">
										<?php
										include "./php/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtKelaminId = '2'";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Ibu Pengantin Wanita</option>';
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
									<label for="waktu-first-meet" class="custom-label">Waktu Pertama Bertemu</label>
									<input type="date" class="form-control" id="waktu-first-meet" placeholder="Waktu First Meet">
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
									<label for="waktu-first-date" class="custom-label">Waktu Pertama Kencan</label>
									<input type="date" class="form-control" id="waktu-first-date" placeholder="Waktu First Date">
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
									<label for="waktu-jadian" class="custom-label">Waktu Jadian</label>
									<input type="date" class="form-control" id="waktu-jadian" placeholder="Waktu Jadian">
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
									<label for="waktu-other" class="custom-label">Waktu Berkesan Lainnya</label>
									<input type="date" class="form-control" id="waktu-other" placeholder="Waktu Other">
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
									<label for="quote-pengantin" class="custom-label">Quote Dari Pengantin</label>
									<textarea name="quote-pengantin" class="form-control" id="quote-pengantin" placeholder="Quote Dari Pengantin"></textarea>
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
									<label for="quote-hadist" class="custom-label">Quote Dari Tokoh Terkenal Atau Hadist</label>
									<textarea name="quote-hadist" class="form-control" id="quote-hadist" placeholder="Quote Dari Tokoh Terkenal Atau Hadist"></textarea>
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
									<label for="phone" class="custom-label">No. E-Wallet</label>
									<input type="tel" class="form-control" id="phone" placeholder="62819-0683-3070" pattern="[0-9]{5}-[0-9]{4}-[0-9]{4}">
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
									<label for="bank" class="custom-label">No. Rek</label>
									<input type="number" class="form-control" id="bank" placeholder="4600119988">
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
									<label for="nama-pemegang-bank" class="custom-label">Nama Pemegang No. Rekening Bank</label>
									<select name="nama-pemegang-bank" class="form-control" id="nama-pemegang-bank">
										<?php
										include "./php/connection.php";
										$sql_user = "SELECT intUserId, txtNamaDepan, txtNamaBelakang FROM tb_user";
										$result_user = mysqli_query($conn, $sql_user);

										if (mysqli_num_rows($result_user) > 0) {
											// output data of each row
											echo '<option selected disabled hidden value="">Nama Pemegang No. Rekening Bank</option>';
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
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Submit</button>
						</div>
						</form>
					</div>
				</div>

				<footer id="fh5co-footer" role="contentinfo">
					<div class="container">

						<div class="row copyright">
							<div class="col-md-12 text-center">
								<p>
									<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
									<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
								</p>
								<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
								</p>
							</div>
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