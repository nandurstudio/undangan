<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html id="html1" class="no-js cover-height">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php
	include "./php/connection.php";
	$shout_query = "SELECT *, date FROM tr_ucapan WHERE date in (SELECT MAX(date) from tr_ucapan GROUP BY namareservasi) ORDER BY `tr_ucapan`.`date` DESC";
	$shouts = mysqli_query($conn, $shout_query);
	$sql_pria = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='1'";
	$result_pria = mysqli_query($conn, $sql_pria);
	$sql_wanita = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='2'";
	$result_wanita = mysqli_query($conn, $sql_wanita);

	if (mysqli_num_rows($result_pria) > 0) {
		// output data of each row
		while ($row = mysqli_fetch_assoc($result_pria)) {
			$pengantin_pria = $row["txtNamaDepan"];
		}
	} else {
		echo "0 results";
	}
	if (mysqli_num_rows($result_wanita) > 0) {
		// output data of each row
		while ($row = mysqli_fetch_assoc($result_wanita)) {
			$pengantin_wanita = $row["txtNamaDepan"];
		}
	} else {
		echo "0 results";
	}
	$the_wedding = "Lembar Undangan Edumeet TPM 2024. hosted by " . $pengantin_pria . " &amp; " . $pengantin_wanita;
	$the_desc = "Assalamu'alaikum Wr. Wb.
	Bismillahirrahmanirrahim
	Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara Edumeet TPM 2024, yang mana akan di pandu oleh 
	
	" . $pengantin_pria . "
	&
	" . $pengantin_wanita . "
	
	Pada :
	Kamis, 29 Feb 2024
	
	Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memeriahkan acaranya.
	
	Terima kasih,
	Wassalamuallaikum Wr. Wb.
	
	Ketua, tim panitia, MC,
	" . $pengantin_pria . " &amp; " . $pengantin_wanita . "";
	echo "<title>" . $the_wedding . "</title>";
	echo "<meta name=\"description\" content=\"" . $the_desc . "\" />";

	mysqli_close($conn);
	//https://stackoverflow.com/a/15864222/7772358
	//echo $_GET['to'];
	//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="invitation, edumeet, shp" />
	<meta name="author" content="Nandur Digital Invitation" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#eb1c27">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#eb1c27">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#eb1c27">
	<link rel="icon" sizes="192x192" href="images/edumeet/favicon_io/android-chrome-192x192.png">
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
	<meta property="og:title" content="Undangan Edumeet TPM 2024" />
	<meta property="og:image" content="https://www.undangan.edumeetshp.com/images/edumeet/og_image.png" />
	<meta property="og:url" content="https://www.edumeetshp.com/" />
	<meta property="og:site_name" content="Undangan Digital Edumeet TPM 2024" />
	<meta property="og:description" content="Kamis, 29 Feb 2024 | Bungursari Lake Park" />
	<meta name="twitter:title" content="Undangan Edumeet TPM 2024" />
	<meta name="twitter:image" content="https://www.undangan.edumeetshp.com/images/edumeet/og_image.png" />
	<meta name="twitter:url" content="https://www.edumeetshp.com/" />
	<meta name="twitter:card" content="Kamis, 29 Feb 2024 | Bungursari Lake Park" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;1,300;1,400;1,500;1,600&family=Karla&display=swap" rel="stylesheet">

	<link rel="icon" type="image/x-icon" href="./images/edumeet/favicon_io/favicon.ico">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/lightbox.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Nav style  -->
	<link rel="stylesheet" href="css/splide.min.css">
	<link rel="stylesheet" href="css/animate-config.css">
	<link rel="stylesheet" href="css/slide-up.css">

	<!-- Swall2 Style -->
	<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body id="body1" class="cover-height">
	<div class="cover" id="cover">
		<div class="container name-cover" id="name-cover">
			<div class="text-center">
				<img class="logo-pengantin animate__animated animate__pulse animate__infinite infinite" src="./images/edumeet/tiket.png" alt="Tiket" width="95%">
			</div>
			<div class="animate__animated animate__headShake animate__infinite infinite col-md-8 col-md-offset-2 text-center">
				<button id="tombol-buka" type="submit" class="animate__animated animate__zoomInDown btn btn-buka">Buka Undangan</button>
			</div>
		</div>
	</div>
	<section>
		<!-- Cover -->
		<header id="fh5co-header" class="fh5co-cover mid" role="banner" style="background-image:url(images/edumeet/cover_edumeet2.jpg);" data-stellar-background-ratio="0.5">
			<!-- <div class="overlay"></div> -->
			<div class="container concover">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc">
								<img id="logo-pengantin" style="opacity:0;" class="logo-pengantin sec-2 animate__animated animate__pulse animate__infinite infinite" src="./images/edumeet/logo_edumeet_time.png" alt="Logo Edumeet" width="80%">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div>
					<svg class="arrows">
						<path class="a3" d="M12.1,31.8L12.1,31.8c-0.3-0.3-0.3-0.7,0-1l17.8-17.8c0.3-0.3,0.7-0.3,1,0l17.1,17.1c0.3,0.3,0.3,0.7,0,1l0,0
	c-0.3,0.3-0.7,0.3-1,0L30.8,15c-0.3-0.3-0.7-0.3-1,0L13,31.8C12.8,32.1,12.3,32.1,12.1,31.8z"></path>
						<path class="a1" d="M12.1,59.7L12.1,59.7c-0.3-0.3-0.3-0.7,0-1L29.8,41c0.3-0.3,0.7-0.3,1,0l17.1,17.1c0.3,0.3,0.3,0.7,0,1l0,0
	c-0.3,0.3-0.7,0.3-1,0L30.8,42.9c-0.3-0.3-0.7-0.3-1,0L13,59.7C12.8,59.9,12.3,59.9,12.1,59.7z"></path>
						<path class="a2" d="M12.1,45.7L12.1,45.7c-0.3-0.3-0.3-0.7,0-1L29.8,27c0.3-0.3,0.7-0.3,1,0l17.1,17.1c0.3,0.3,0.3,0.7,0,1l0,0
	c-0.3,0.3-0.7,0.3-1,0L30.8,29c-0.3-0.3-0.7-0.3-1,0L13,45.7C12.8,46,12.3,46,12.1,45.7z"></path>
					</svg>
				</div><br />
				<div class="hari-pernikahan geser-atas">GESER KE ATAS</div>
			</div>
		</header>
	</section>
	<section>
		<!-- Barcode -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center text-papper bg-papper-div">
						<?php
						if (isset($_GET['to'])) {
							$string_to_encrypt = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
							if (isset($_GET['adr'])) {
								$alamat = htmlspecialchars($_GET['adr']);
							} else {
								$alamat = '';
							}
							if (isset($_GET['s'])) {
								$sesi = htmlspecialchars($_GET['s']);
							} else {
								$sesi = '1';
							}
							$password = "password";
							$encrypted_string = openssl_encrypt($string_to_encrypt, "AES-128-ECB", $password);
							$decrypted_string = openssl_decrypt($encrypted_string, "AES-128-ECB", $password);
							$guest_name = str_replace('&amp;', 'dan', $decrypted_string);
							// echo $string_to_encrypt;
							// echo $encrypted_string;
							// echo $decrypted_string;
							echo "<h6 class=\"kepada js animate__animated\">Kepada Bapak/Ibu/Saudara/i,</h6><div class=\"nama-tamu js animate__animated js\">" . $decrypted_string . "</div>
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Edumeet TPM SHP Plant 2024.</p>
							<p class=\"js animate__animated\" hidden>Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<a class=\"demo js animate__animated\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\" data-lightbox=\"example-1\" hidden>
							<img class=\"example-image js animate__animated\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "&amp;size=200x200\" alt=\"QR Code " . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\">
							</a><br \><div class=\"p-protokol js animate__animated\" hidden>Klik untuk memperbesar</div>";
							// https://www.jqueryscript.net/lightbox/lightbox2.html
						} else {
							// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
							// echo $actual_link;
							$actual_link = "Anonymous";
							echo "<h6 class=\"kepada js animate__animated\">Kepada Bapak/Ibu/Saudara/i,</h6><div class=\"nama-tamu js animate__animated js\">" . $actual_link . "</div>
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Edumeet TPM SHP Plant 2024.</p>
							<p class=\"js animate__animated\" hidden>Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<a class=\"demo js animate__animated\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "\" data-lightbox=\"example-1\" hidden>
							<img class=\"example-image js animate__animated\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "&amp;size=200x200\" alt=\"QR Code " . $actual_link . "\">
							</a><br \><div class=\"p-protokol js animate__animated\" hidden>Klik untuk memperbesar</div>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Reservasi -->
		<div id="fh5co-couple" class="bg-carton vh150">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 js animate__animated">
						<div class="row">
							<div class="nama-pengantin-foto js animate__animated">Reservasi Kehadiran</div>
						</div>
						<iframe name="content-reservasi" style="display:none">
						</iframe>
						<form id="wishForm" class="form-group" action="./php/wish.php" method="post" target="content-reservasi">
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name" class="custom-label"><i class="icon-user"></i> Nama Pada Undangan</label>
										<input type="name" name="name" id="name" class="form-control" placeholder="Nama tamu" autocomplete="name" readonly>
										<?php
										if (isset($_GET['to'])) {
											$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
											$rep_guest_name = str_replace('&amp;', '&', $guest_name);
											echo "<script>document.querySelector(\"#name\").value = \"" . $rep_guest_name . "\";</script>";
										} else {
											echo "<script>document.querySelector(\"#name\").value = \"Anonymous\";</script>";
										}
										?>
									</div>
								</div>
							</div>
							<div class="row js animate__animated" style="display:none;">
								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat" class="custom-label"><i class="icon-address"></i> Alamat</label>
										<input type="text" class="form-control" id="alamat" placeholder="0" disabled></input>
										<?php
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
											echo "<script>document.querySelector(\"#alamat\").value = \"" . $alamat . "\";</script>";
										} else {
											echo "<script>document.querySelector(\"#alamat\").value = \"None\";</script>";
										}
										?>
									</div>
								</div>
							</div>
							<div class="row js animate__animated" style="display:none;">
								<div class="col-md-12">
									<div class="form-group">
										<label for="sesi-reservasi" class="custom-label"><i class="icon-clock2"></i> Sesi</label>
										<input type="text" class="form-control" id="sesi-reservasi" placeholder="0" disabled></input>
										<?php
										if (isset($_GET['s'])) {
											$sesi = htmlspecialchars($_GET['s']); // Getting parameter value inside PHP variable
											echo "<script>document.querySelector(\"#sesi-reservasi\").value = \"" . $sesi . "\";</script>";
										} else {
											echo "<script>document.querySelector(\"#sesi-reservasi\").value = \"1\";</script>";
										}
										?>
									</div>
								</div>
							</div>
							<div class="row js animate__animated" hidden>
								<div class="col-md-12">
									<div class="form-check checkleft">
										<label for="namachat" class="form-check-label checkcap">Nama saya sama dengan nama pada undangan</label>
										<input class="form-check-input" type="checkbox" id="namachat" name="namachat" value="namachatsama" checked>
									</div>
									<div class="form-group">
										<label for="namareservasi" class="custom-label">
											<i class="icon-pencil"></i> Nama Anda
										</label>
										<input type="text" id="namareservasi" name="name" class="form-control" placeholder="Nama Anda" autocomplete="name">
									</div>
								</div>
							</div>
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<label for="konfirmasi-kehadiran" class="custom-label"><i class="icon-pencil"></i> Konfirmasi Kehadiran</label>
										<select name="konfirmasi-kehadiran" class="form-control" id="konfirmasi-kehadiran">
											<?php
											include "./php/connection.php";
											if (isset($_GET['to'])) {
												$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
												$rep_guest_name = str_replace('&amp;', '&', $guest_name);
												if (isset($_GET['namareservasi'])) {
													$nama_reservasi = $_GET['namareservasi'];
												} else {
													$nama_reservasi = '';
												}
											} else {
												$rep_guest_name = 'Anonymous';
											}
											if (isset($_GET['adr'])) {
												$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
											} else {
												$alamat = '';
											}
											$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu, kendaraan FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
											$result_query = mysqli_query($conn, $query);

											if (mysqli_num_rows($result_query) > 0) {
												// output data of each row
												while ($row = mysqli_fetch_assoc($result_query)) {
													if ($row["attending"] == "0") {
														echo "<option class=\"optionbox\" disabled hidden value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option class=\"optionbox\" value=\"1\">Akan Hadir</option>";
														echo "<option class=\"optionbox\" value=\"0\" selected>Tidak Bisa Hadir</option>";
													} elseif ($row["attending"] == "1") {
														echo "<option class=\"optionbox\" disabled hidden value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option class=\"optionbox\" value=\"1\" selected>Akan Hadir</option>";
														echo "<option class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
													} else {
														echo "<option class=\"optionbox\" selected value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option class=\"optionbox\" value=\"1\">Akan Hadir</option>";
														echo "<option class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
													}
												}
											} else {
												echo "<option class=\"optionbox\" disabled hidden selected value=\"\">Konfirmasi Kehadiran</option>";
												echo "<option class=\"optionbox\" value=\"1\">Akan Hadir</option>";
												echo "<option class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
											}
											mysqli_close($conn);
											//https://stackoverflow.com/a/15864222/7772358
											//echo $_GET['to'];
											//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
											?>
											<!-- <option selected="selected" disabled="" hidden="" value="">Konfirmasi Kehadiran</option>
											<option selected="" style="color: black;" value="1">Akan Hadir</option>
											<option selected="" style="color: black;" value="0">Tidak Bisa Hadir</option> -->
										</select>
									</div>
								</div>
							</div>
							<div class="row js animate__animated" id="divkendaraan">
								<div class="col-md-12">
									<div class="form-group">
										<label for="konfirmasi-kendaraan" class="custom-label"><i class="icon-book"></i> Transportasi Keberangkatan</label>
										<select name="konfirmasi-kendaraan" class="form-control" id="konfirmasi-kendaraan">
											<?php
											include "./php/connection.php";
											if (isset($_GET['to'])) {
												$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
												$rep_guest_name = str_replace('&amp;', '&', $guest_name);
												if (isset($_GET['namareservasi'])) {
													$nama_reservasi = $_GET['namareservasi'];
												} else {
													$nama_reservasi = '';
												}
											} else {
												$rep_guest_name = 'Anonymous';
											}
											if (isset($_GET['adr'])) {
												$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
											} else {
												$alamat = '';
											}
											$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu, kendaraan FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
											$result_query = mysqli_query($conn, $query);
											if (mysqli_num_rows($result_query) > 0) {
												while ($row = mysqli_fetch_assoc($result_query)) {
													if ($row["kendaraan"] == "0") {
														echo "<option class=\"optionbox\" disabled hidden value=\"\">Transportasi Keberangkatan</option>";
														echo "<option class=\"optionbox\" value=\"0\" selected>Kendaraan Pribadi (Motor)</option>";
														echo "<option class=\"optionbox\" value=\"1\">Nebeng (Umum)</option>";
														echo "<option class=\"optionbox\" value=\"2\">Kendaraan Pribadi (Mobil)</option>";
													} elseif ($row["kendaraan"] == "1") {
														echo "<option class=\"optionbox\" disabled hidden value=\"\">Transportasi Keberangkatan</option>";
														echo "<option class=\"optionbox\" value=\"0\">Kendaraan Pribadi (Motor)</option>";
														echo "<option class=\"optionbox\" value=\"1\" selected>Nebeng (Umum)</option>";
														echo "<option class=\"optionbox\" value=\"2\">Kendaraan Pribadi (Mobil)</option>";
													} elseif ($row["kendaraan"] == "2") {
														echo "<option class=\"optionbox\" disabled hidden value=\"\">Transportasi Keberangkatan</option>";
														echo "<option class=\"optionbox\" value=\"0\">Kendaraan Pribadi (Motor)</option>";
														echo "<option class=\"optionbox\" value=\"1\">Nebeng (Umum)</option>";
														echo "<option class=\"optionbox\" value=\"2\" selected>Kendaraan Pribadi (Mobil)</option>";
													} else {
														echo "<option class=\"optionbox\" selected value=\"\">Transportasi Keberangkatan</option>";
														echo "<option class=\"optionbox\" value=\"0\">Kendaraan Pribadi (Motor)</option>";
														echo "<option class=\"optionbox\" value=\"1\">Nebeng (Umum)</option>";
														echo "<option class=\"optionbox\" value=\"2\">Kendaraan Pribadi (Mobil)</option>";
													}
												}
											} else {
												echo "<option class=\"optionbox\" disabled hidden selected value=\"\">Transportasi Keberangkatan</option>";
												echo "<option class=\"optionbox\" value=\"0\">Kendaraan Pribadi (Motor)</option>";
												echo "<option class=\"optionbox\" value=\"1\">Nebeng (Umum)</option>";
												echo "<option class=\"optionbox\" value=\"2\">Kendaraan Pribadi (Mobil)</option>";
											}
											mysqli_close($conn);
											//https://stackoverflow.com/a/15864222/7772358
											//echo $_GET['to'];
											//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
											?>
											<!-- <option selected="selected" disabled="" hidden="" value="">Konfirmasi Kehadiran</option>
											<option selected="" style="color: black;" value="1">Akan Hadir</option>
											<option selected="" style="color: black;" value="0">Tidak Bisa Hadir</option> -->
										</select>
									</div>
								</div>
							</div>
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<label for="wish" class="custom-label"><i class="icon-chat"></i> <span id="komentar">Komentar</span></label>
										<?php
										include "./php/connection.php";
										if (isset($_GET['to'])) {
											$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
											$rep_guest_name = str_replace('&amp;', '&', $guest_name);
											$nama_reservasi = $rep_guest_name;
										} else {
											$rep_guest_name = 'Anonymous';
											$nama_reservasi = 'Anonymous';
										}
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
										} else {
											$alamat = '';
										}
										$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu, kendaraan FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
										$result_query = mysqli_query($conn, $query);
										if (mysqli_num_rows($result_query) > 0) {
											// output data of each row
											while ($row = mysqli_fetch_assoc($result_query)) {
												echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Berikan komentar atau alasan jika tidak bisa hadir\">" . $row["ucapan"] . "</textarea>";
											}
										} else {
											echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Berikan komentar atau alasan jika tidak bisa hadir\"></textarea>";
										}
										mysqli_close($conn);
										//https://stackoverflow.com/a/15864222/7772358
										//echo $_GET['to'];
										//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
										?>
									</div>
								</div>
							</div>
							<div class="row js animate__animated" id="divjumlahtamu" hidden>
								<div class="col-md-12">
									<div class="form-group">
										<label for="jumlahtamu" class="custom-label"><i class="icon-users"></i> Jumlah Tamu Termasuk Anda</label>
										<input type="number" class="form-control" id="jumlahtamu" placeholder="0"></input>
										<?php
										include "./php/connection.php";
										if (isset($_GET['to'])) {
											$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
											$rep_guest_name = str_replace('&amp;', '&', $guest_name);
											if (isset($_GET['namareservasi'])) {
												$nama_reservasi = $_GET['namareservasi'];
											} else {
												$nama_reservasi = '';
											}
										} else {
											$rep_guest_name = 'Anonymous';
										}
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
										} else {
											$alamat = '';
										}
										$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu, kendaraan FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
										$result_query = mysqli_query($conn, $query);

										if (mysqli_num_rows($result_query) > 0) {
											// output data of each row
											while ($row = mysqli_fetch_assoc($result_query)) {
												echo "<script>document.querySelector(\"#jumlahtamu\").value = \"" . intval(trim($row['jumlahtamu'])) . "\";</script>";
											}
										} else {
											echo "<script>document.querySelector(\"#jumlahtamu\").value = \"\";</script>";
										}
										mysqli_close($conn);
										//https://stackoverflow.com/a/15864222/7772358
										//echo $_GET['to'];
										//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
										?>
									</div>
								</div>
							</div>
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" name="submit" value="submit" class="btn btn-default btn-block pull-right" onclick="return clickButton();">Kirim</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-8 col-md-offset-2 js animate__animated">
						<form class="form-group">
							<?php
							include "./php/connection.php";
							$guest_query = "SELECT COUNT(namareservasi) AS namareservasi, date FROM tr_ucapan WHERE date in (SELECT MAX(date) from tr_ucapan GROUP BY namareservasi) ORDER BY `tr_ucapan`.`date` DESC;";
							$guest_count = mysqli_query($conn, $guest_query);
							$row = mysqli_fetch_assoc($guest_count);
							$ucapan = $row['namareservasi'];
							echo "<span class=\"custom-label\" id=\"custom-label\"><i class=\"icon-twitter\"></i> " . $ucapan . " Komentar</span>";
							?>
							<div class="fh5co-started form-control" style="height: 300px; overflow: auto;">
								<div id="minichat">
									<?php
									while ($row = mysqli_fetch_assoc($shouts)) :
										echo "<div style=\"text-align: left;\">";
										echo "<strong>" . ucwords(strtolower($row["namareservasi"])) . " </strong>";
										$att = $row["attending"];
										$tamu = $row["jumlahtamu"];
										$kendaraan = $row["kendaraan"];
										// Membuat variabel array
										$pilihankendaraan = array("Kendaraan Pribadi (Motor)", "Nebeng (Umum)", "Kendaraan Pribadi (Mobil)");

										// Memilih elemen array menggunakan PHP
										// Contoh: memilih elemen pertama dari array
										$pilihanPertama = $pilihankendaraan[0];
										$pilihanKedua = $pilihankendaraan[1];
										$pilihanKetiga = $pilihankendaraan[2];
										if ($att == 1) {
											if ($kendaraan == 0) {
												echo "<br /><span class=\"hadir\">Akan Hadir dengan " . $pilihanPertama . "</span>";
											} else if ($kendaraan == 1) {
												echo "<br /><span class=\"hadir tidak-konfirmasi\">Akan Hadir dengan " . $pilihanKedua . "</span>";
											} else if ($kendaraan == 2) {
												echo "<br /><span class=\"hadir\">Akan Hadir dengan " . $pilihanKetiga . "</span>";
											} else {
												echo "<br /><span class=\"hadir tidak-konfirmasi\">Tidak Konfirmasi Kendaraan</span>";
											}
										} elseif ($att == 0) {
											echo "<br /><span class=\"hadir tidak-hadir\">Tidak Bisa Hadir</span>";
										} else {
											echo "<br /><span class=\"hadir tidak-konfirmasi\">Tidak Konfirmasi</span>";
										}
										echo "<p class=\"wishtext\">" . $row['ucapan'];
										echo "<time class=\"timeago timestamp\" datetime=\"" . $row["date"] . "\">";
										echo "</time></p></div>";
									endwhile; ?>
								</div>
							</div>
						</form>
					</div>
				</div>
				<p id="msg" class="js animate__animated"></p>
				<div class="row js animate__animated">
					<div class="col-md-12 col-md-offset-4">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<div class="feature-center">
										<span class="icon">
											<i class="icon-users"></i>
										</span>
										<span class="counter-label counter-span">Estimasi jumlah tamu hadir: </span>
										<?php
										include "./php/connection.php";
										$guest_query = "SELECT SUM(jumlahtamu) AS jumlahtamu, date FROM tr_ucapan WHERE date in (SELECT MAX(date) from tr_ucapan GROUP BY namareservasi) ORDER BY `tr_ucapan`.`date` DESC;";
										$guest_count = mysqli_query($conn, $guest_query);
										$row = mysqli_fetch_assoc($guest_count);
										$sum = $row['jumlahtamu'];
										echo "<span id=\"guest-count-icon\" class=\"counter js-counter counter-span\" data-from=\"0\" data-to=\"" . $sum . "\" data-speed=\"5000\" data-refresh-interval=\"50\">" . $sum;
										?></span>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Mempelai Pria -->
		<div id="fh5co-couple" class="bg-carton one-page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="nama-pengantin-foto mempelai js animate__animated">Master of Ceremony 1</div>
						<a class="demo js animate__animated" href="images/edumeet/andri.png" data-lightbox="example-1">
							<img src="images/edumeet/andri.png" alt="Bagus" class="img-responsive foto-pengantin js animate__animated">
						</a>
						<?php
						include "./php/connection.php";
						$sql_pria = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId ='1'";
						$sql_ayah_pria = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId = '3'";
						$sql_ibu_pria = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId = '4'";
						$result_pria = mysqli_query($conn, $sql_pria);
						$result_ayah_pria = mysqli_query($conn, $sql_ayah_pria);
						$result_ibu_pria = mysqli_query($conn, $sql_ibu_pria);

						if (mysqli_num_rows($result_pria) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_pria)) {
								$pengantin_pria = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"];
							}
						} else {
							echo "0 results";
						}
						if (mysqli_num_rows($result_ayah_pria) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_ayah_pria)) {
								$ayah_pria = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
							}
						} else {
							echo "0 results";
						}
						if (mysqli_num_rows($result_ibu_pria) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_ibu_pria)) {
								$ibu_pria = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
							}
						} else {
							echo "0 results";
						}
						echo "<div class=\"nama-pengantin-foto onepage js animate__animated\">" . $pengantin_pria . "</div>
							</a>";
						echo "<p class=\"js animate__animated\">Admin<br /><span class=\"ortu\">Department PREP & PPC</span></p>";
						// echo "<p class=\"js animate__animated\">Putra ketiga dari<br /><span class=\"ortu\">Bapak " . $ayah_pria . " &amp; Ibu " . $ibu_pria . "</span></p>";

						mysqli_close($conn);
						//https://stackoverflow.com/a/15864222/7772358
						//echo $_GET['to'];
						//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Mempelai Wanita -->
		<div id="fh5co-couple" class="bg-carton one-page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="nama-pengantin-foto mempelai js animate__animated">Master of Ceremony 2</div>
						<a class="demo js animate__animated" href="images/edumeet/mawar.png" data-lightbox="example-1">
							<img src="images/edumeet/mawar.png" alt="Mawar" class="img-responsive foto-pengantin js animate__animated">
						</a>
						<?php
						include "./php/connection.php";
						$sql_wanita = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId ='2'";
						$sql_ayah_wanita = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId = '5'";
						$sql_ibu_wanita = "SELECT txtNamaDepan, txtNamaBelakang, txtTitle FROM tb_user WHERE txtUndanganId = '6'";
						$result_wanita = mysqli_query($conn, $sql_wanita);
						$result_ayah_wanita = mysqli_query($conn, $sql_ayah_wanita);
						$result_ibu_wanita = mysqli_query($conn, $sql_ibu_wanita);

						if (mysqli_num_rows($result_wanita) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_wanita)) {
								$pengantin_wanita = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];;
							}
						} else {
							// echo "0 results";
						}

						if (mysqli_num_rows($result_ayah_wanita) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_ayah_wanita)) {
								$ayah_wanita = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
							}
						} else {
							// echo "0 results";
						}

						if (mysqli_num_rows($result_ibu_wanita) > 0) {
							// output data of each row
							while ($row = mysqli_fetch_assoc($result_ibu_wanita)) {
								$ibu_wanita = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
							}
						} else {
							// echo "0 results";
						}

						echo "<div class=\"nama-pengantin-foto onepage js animate__animated\">" . $pengantin_wanita . "</div>
							</a>";
						echo "<p class=\"js animate__animated\">Admin<br /><span class=\"ortu\">Department PAM</span></p>";
						// echo "<p class=\"js animate__animated\">Putri kedua dari<br /><span class=\"ortu\">Bapak " . $ayah_wanita . " &amp; Ibu " . $ibu_wanita . "</span></p>";
						mysqli_close($conn);
						//https://stackoverflow.com/a/15864222/7772358
						//echo $_GET['to'];
						//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Tanggal dan Counting Timer -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="big-date js animate__animated">29.FEB.24</div>
						<div id="demo"></div>
						<div class="simply-countdown simply-countdown-one js animate__animated"></div>
						<p><a href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20240229T040000Z/20240229T090000Z&crm=AVAILABLE&sprop=website:www.edumeetshp.com/undangan&sprop=name:Edumeetshp&ctz=Asia/Jakarta&text=Edumeet%202024&location=Bungursari%20Lake%20Park%2C%20Kampung%2C%20Jl.%20Awi%20Mekar%2C%20Bungursari%2C%20Kec.%20Bungursari%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat%2C%20Indonesia&details=Tanpa%20mengurangi%20rasa%20hormat%2C%20harap%20datang%2010%20menit%20sebelum%20acara%20dimulai%2C%20gunakan%20Dress%20code%20sesuai%20dengan%20yang%20sudah%20di%20tentukan." class="btn btn-default btn-sm js animate__animated" target="blank" rel="nofollow">Tambah ke Google Kalender</a></p>
						<br />
						<div class="col-md-8 col-md-offset-2 text-center">
							<a class="demo js animate__animated" href="images/edumeet/events.png" data-lightbox="example-1">
								<img src="images/edumeet/events.png" alt="Event" class="img-responsive foto-pengantin js animate__animated">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Lokasi -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="nama-pengantin-foto js animate__animated">Lokasi</div>
						<div id="map" class="fh5co-map event-wrap">
							<div class="col-md-8 col-md-offset-2 text-center">
								<p class="js animate__animated"><span style="font-weight:bold;">Bungursari Lake Park</span><br />Kampung, Jl. Awi Mekar, Kec. Bungursari,<br />Kabupaten Purwakarta, Jawa Barat</p>
								<p><a href="https://maps.app.goo.gl/bSo8TMpuHJmwzLp66" class="btn btn-default btn-sm btn-peta js animate__animated" target="blank">Lihat Peta</a></p>
								<img src="images/denaya/separator.png" alt="denaya_separator" class="img-responsive flower denaya-separator js animate__animated">
							</div>
							<iframe class="js animate__animated" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.8000803157292!2d107.46939974532106!3d-6.480597726669977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690db48a0a4c2d%3A0x5e708a31da0dd5b5!2sBungursari%20Lake%20Park!5e0!3m2!1sen!2sid!4v1708863275103!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
							</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Protokol -->
		<div id="fh5co-couple" class="bg-carton fit-screen" hidden>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="nama-pengantin-foto js animate__animated">Protokol</div>
						<p class="js animate__animated">Tanpa mengurangi rasa hormat, harap mengkuti peraturan yang sudah ditetapkan oleh panitia agar acara berjalan lancar dengan mengikuti protokol berikut:</p>
						<div class="col-md-8 col-md-offset-2 text-center kolom">
							<div class="text-center">
								<img src="images/edumeet/tumbler.png" alt="Botol tumbler" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Wajib membawa Tumbler</div>
							</div>
							<div class="text-center">
								<img src="images/edumeet/team.png" alt="Gunakan Jas" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Gunakan Dresscode sesuai ketentuan berupa Nuansa HITAM</div>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center kolom">
							<div class="text-center">
								<img src="images/edumeet/voucher.png" alt="Tiket" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Siapkan tiket virtual ini sebagai akses masuk</div>
							</div>
							<div class="text-center">
								<img src="images/edumeet/qr-scan.png" alt="Scan QR Code" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
								<div class="p-protokol js animate__animated">Tunjukan QR Code saat melakukan registrasi</div>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center">
							<img src="images/edumeet/gadget.png" alt="No Laptop" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
							<div class="p-protokol js animate__animated">Fokus selama acara berlangsung</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="fh5co-footer" role="contentinfo" class="bg-carton">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<!-- <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> -->
						<small class="block">&copy; 2024 Nandur Studio. All Rights Reserved.</small>
						<!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
						<small class="block">Web Invitation by <a href="https://www.nandurstudio.com" target="_blank">Nandur Studio Event</a>
							</br>Design by <a href="https://instagram.com/nandur.studio" target="_blank">Nandur Studio</a>
							</br>Master Template: <a href="http://freehtml5.co/" target="_blank">&copy; 2016 Free HTML5. All Rights Reserved.</a></small>
					</p>
					<p>
					<ul class="fh5co-social-icons">
						<li><a href="https://twitter.com/NandurStudio" target="_blank"><i class="icon-twitter"></i></a></li>
						<li><a href="https://web.facebook.com/nandurstudioanimasi" target="_blank"><i class="icon-facebook"></i></a></li>
						<li><a href="https://www.linkedin.com/in/nandangduryat/" target="_blank"><i class="icon-linkedin"></i></a></li>
						<li><a href="https://dribbble.com/nandurstudio" target="_blank"><i class="icon-dribbble"></i></a></li>
					</ul>
					</p>
				</div>
			</div>
		</footer>
	</section>
	<div class="music-control">
		<span class='pause'></span>
		<span class='play'></span>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<audio id="myAudio">
		<source src="./sounds/Love-Letter_Cavendish.mp3" type="audio/mp3">
	</audio>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.min.js"></script>
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

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- <script src="js/ws_countdown.js"></script> -->
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/jquery.timeago.js"></script>
	<script src="node_modules/clipboard/dist/clipboard.min.js"></script>
	<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			// Set initial state
			$('#namareservasi').val($('#name').val());

			// Hide #jumlahtamu and kendaraan initially
			$('#jumlahtamu').hide('3');
			$('#divkendaraan').hide();

			// Handle konfirmasi kehadiran change event
			$('#konfirmasi-kehadiran').on('change', function(e) {
				var valueSelected = $(this).val();
				if (valueSelected === '0') { //0 tidak bisa hadir
					$('#komentar').text("Alasan");
					$('#wish').attr("placeholder", "Berikan alasan kenapa tidak bisa hadir");
					$('#jumlahtamu').val('');
					$('#divkendaraan').hide();
					$('#konfirmasi-kendaraan').val("").change();
				} else {
					$('#komentar').text("Komentar");
					$('#wish').attr("placeholder", "Berikan komentar positif untuk acara");
					$('#jumlahtamu').val(1);
					$('#divkendaraan').show();
				}
			}).trigger('change'); // Trigger change event initially

			// Handle namachat click event
			$('#namachat').click(function() {
				var nameValue = $('#name').val();
				$('#namareservasi').val($(this).prop('checked') ? nameValue : '');
			});
		});

		function clickButton() {
			var name = $('#name').val();
			var namareservasi = $('#namareservasi').val();
			var alamat = $('#alamat').val();
			var wish = $('#wish').val();
			var attending = $('#konfirmasi-kehadiran').val();
			var kendaraan = $('#konfirmasi-kendaraan').val();
			var jumlahtamu = $('#jumlahtamu').val();
			var sesi = $('#sesi-reservasi').val();
			var konfirmasiText = $('#konfirmasi-kehadiran :selected').text();
			var kendaraanText = $('#konfirmasi-kendaraan :selected').text();

			if (namareservasi === '') {
				Swal.fire({
					icon: "error",
					title: "Mohon isi nama terlebih dahulu",
					showConfirmButton: false,
					timer: 1500
				});
				return false;
			}

			if (konfirmasiText === 'Konfirmasi Kehadiran') {
				Swal.fire({
					icon: "error",
					title: "Tolong isi konfirmasi kehadiran!",
					showConfirmButton: false,
					timer: 1500
				});
				return false;
			}

			if (konfirmasiText === 'Tidak Bisa Hadir' && wish === '') {
				Swal.fire({
					icon: "error",
					title: "Mohon isi alasan kenapa tidak bisa hadir",
					showConfirmButton: false,
					timer: 1500
				});
				return false;
			}

			if (konfirmasiText === 'Akan Hadir' && kendaraanText === 'Transportasi Keberangkatan') {
				Swal.fire({
					icon: "error",
					title: "Mohon pilih Transportasi Kendaraan",
					showConfirmButton: false,
					timer: 1500
				});
				return false;
			}

			if (konfirmasiText === 'Akan Hadir' && jumlahtamu <= 0) {
				Swal.fire({
					icon: "error",
					title: "Jumlah tamu termasuk Anda minimal 1",
					showConfirmButton: false,
					timer: 1500
				});
				return false;
			}

			if (wish === '') {
				Swal.fire({
					icon: "info",
					title: "Silakan untuk mengisi ucapan atau kata-kata penyemangat acara pada kolom komentar!",
					showConfirmButton: false,
					timer: 3000
				});
				return false;
			}

			if (attending === 0) {
				kendaraan = ''
			}

			$.ajax({
				type: "post",
				url: "./php/wish.php",
				data: {
					'name': name,
					'namareservasi': namareservasi,
					'alamat': alamat,
					'wish': wish,
					'attending': attending,
					'jumlahtamu': jumlahtamu,
					'sesi': sesi,
					'kendaraan': kendaraan,
				},
				cache: false,
				success: function(html) {
					$('#msg').html(html);
					$('#minichat').html(html);
					$('#minichat').load(location.href + " #minichat");
					Swal.fire({
						icon: "success",
						title: "Confirmation sent. Thank you!",
						showConfirmButton: false,
						timer: 1500
					});
					$('#wish').val('');
					$('#custom-label').load(location.href + " #custom-label");
					$('#guest-count-icon').html(html);
					$('#guest-count-icon').load(location.href + " #guest-count-icon");
				}
			});

			return false;
		}

		var $win = $(window);
		var $stat = $('.js.animate__animated'); // Change this to affect your desired element.

		$win.on('scroll', function() {
			var scrollTop = $win.scrollTop();

			$stat.each(function() {
				var $self = $(this);
				var prev = $self.offset();
				// console.log(scrollTop);
				// console.log(prev.top);
				if ((scrollTop - prev.top) > -900) {
					$self.removeClass('animate__fadeOutDown').addClass('animate__fadeInUp');
				} else {
					$self.removeClass('animate__fadeInUp').addClass('animate__fadeOutDown');
				}

			});

		}).scroll();

		let cb = new ClipboardJS('.btn');
		$('.btn').on('click', function() {
			//get a reference to the JQUERY object of the current button
			let theButton = $(this);
			var copy_id = $(this).attr('id');

			var clipboard = new ClipboardJS('#' + copy_id);

			clipboard.on('success', function(e) {
				let oldtext = e.trigger.textContent
				e.trigger.textContent = 'Berhasil disalin!'
				setTimeout(() => e.trigger.textContent = oldtext, 2000)
			});

		});

		$(function() {
			$("time.timeago").timeago();
		});
		var d = new Date(new Date("Feb 29, 2024 11:00:00").getTime());
		//var countDownDate = new Date("Mar 27, 2022 08:00:00").getTime();


		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: true
		});

		var x = document.getElementById("myAudio");
		$('.pause').on('click', function() {
			$(this).hide();
			$('.play').css('display', 'inline-block');
			//audioElement.pause();
			//soundEffect.pause();
			pauseAudio();
		});

		$('.play').on('click', function() {
			$(this).hide();
			$('.pause').css('display', 'inline-block');
			//soundEffect.play();
			//audioElement.play();
			playAudio();
		});

		function playAudio() {
			x.play();
		}

		function pauseAudio() {
			x.pause();
		}

		$("#tombol-buka").on('click', function() {
			playAudio();
			$("#logo-pengantin").css({
				opacity: '1'
			});
			$("#name-cover").fadeOut(300, function() {
				// later on when you actually want to play a sound at any point without user interaction
				//soundEffect.src = './sounds/aurora_existforlove.mp3';
				//soundEffect.play();
				//audioElement.play();
				$(this).remove();
				// put your default event here
				$("html").removeClass("cover-height");
				$("body").removeClass("cover-height").css({
					'overflow-y': 'auto',
					'overflow-x': 'hidden'
				});
				$("#cover").fadeOut(300, function() {
					$(this).remove();
				});
				$('.play').hide();
				$('.pause').css('display', 'inline-block');
			});
		});
	</script>
</body>

</html>