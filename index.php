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
	$the_wedding = "Lembar Undangan Pandawa Awards 2023. hosted by " . $pengantin_pria . " &amp; " . $pengantin_wanita;
	$the_wedding = "Lembar Undangan Pandawa Awards 2023. hosted by " . $pengantin_pria . " &amp; " . $pengantin_wanita;
	$the_desc = "Assalamu'alaikum Wr. Wb.
	Bismillahirrahmanirrahim
	Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara Pandawa Awards 2023, yang mana akan di pandu oleh 
	Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara Pandawa Awards 2023, yang mana akan di pandu oleh 
	
	" . $pengantin_pria . "
	&
	" . $pengantin_wanita . "
	
	Pada :
	Rabu, 04 Oct 2023
	Rabu, 04 Oct 2023
	
	Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memeriahkan acaranya.
	Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memeriahkan acaranya.
	
	Terima kasih,
	Wassalamuallaikum Wr. Wb.
	
	Ketua, tim panitia, MC,
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
	<meta name="keywords" content="invitation, pandawa, awards" />
	<meta name="keywords" content="invitation, pandawa, awards" />
	<meta name="author" content="Nandur Digital Invitation" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#D1B374">
	<meta name="theme-color" content="#D1B374">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#D1B374">
	<meta name="msapplication-navbutton-color" content="#D1B374">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#D1B374">
	<link rel="icon" sizes="192x192" href="images/pandawa/logo_pandawa_192.png">
	<meta name="apple-mobile-web-app-status-bar-style" content="#D1B374">
	<link rel="icon" sizes="192x192" href="images/pandawa/logo_pandawa_192.png">
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
	<meta property="og:title" content="Undangan Pandawa Awards" />
	<meta property="og:image" content="images/pandawa/og_image.png" />
	<meta property="og:url" content="https://pandawa.kn-sf.com/" />
	<meta property="og:site_name" content="Undangan Digital Pandawa" />
	<meta property="og:description" content="Rabu, 04 Oct 2023 - 09:00 | Diamond Room" />
	<meta name="twitter:title" content="Undangan Pandawa Awards" />
	<meta name="twitter:image" content="images/pandawa/og_image.png" />
	<meta name="twitter:url" content="https://pandawa.kn-sf.com/" />
	<meta name="twitter:card" content="Rabu, 04 Oct 2023 - 09:00 | Diamond Room" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;1,300;1,400;1,500;1,600&family=Karla&display=swap" rel="stylesheet">

	<link rel="icon" type="image/x-icon" href="./images/pandawa/favicon.ico">
	<link rel="icon" type="image/x-icon" href="./images/pandawa/favicon.ico">

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
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body id="body1" class="cover-height">
	<div class="cover" id="cover">
		<!-- Modal -->
		<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Attention!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="animate-box just-center">
								<p>This event is carried out by implementing the following health protocols:</br>
									<img class="protokol-image" src="./images/protokol_en.png" />
								<p>Without reducing respect, in order to reduce the spread of the pandemic, please always follow the health protocols and arrive on time according to the hours listed on the invitation.</p>
								<p>Press the close button to close this information/this information will be closed automatically after <span id="countdown">15</span></p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div class="container name-cover" id="name-cover">
			<div class="text-center">
				<img class="logo-pengantin animate__animated animate__pulse animate__infinite infinite" src="./images/pandawa/tiket.png" alt="Logo Naufal And Denaya" width="95%">
			<div class="text-center">
				<img class="logo-pengantin animate__animated animate__pulse animate__infinite infinite" src="./images/pandawa/tiket.png" alt="Logo Naufal And Denaya" width="95%">
			</div>
			<div class="animate__animated animate__headShake animate__infinite infinite col-md-8 col-md-offset-2 text-center">
				<button id="tombol-buka" type="submit" class="animate__animated animate__zoomInDown btn btn-buka">Buka Undangan</button>
			</div>
		</div>
	</div>
	<!-- Bottom Navbar -->
	<!-- <nav class="navbar navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
			<ul class="navbar-nav nav-justified w-100">
				<li class="nav-item">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Cari</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Add</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Notif</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Profile</a>
				</li>
			</ul>
		</nav> -->
	<section>
		<!-- Cover -->
		<header id="fh5co-header" class="fh5co-cover mid" role="banner" style="background-image:url(images/pandawa/cover_pandawa2.jpg);" data-stellar-background-ratio="0.5">
		<header id="fh5co-header" class="fh5co-cover mid" role="banner" style="background-image:url(images/pandawa/cover_pandawa2.jpg);" data-stellar-background-ratio="0.5">
			<!-- <div class="overlay"></div> -->
			<div class="container concover">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc">
								<img id="logo-pengantin" style="opacity:0;" class="logo-pengantin sec-2 animate__animated animate__pulse animate__infinite infinite" src="./images/pandawa/logo_pandawa_time.png" alt="Logo Pandawa" width="80%">
								<img id="logo-pengantin" style="opacity:0;" class="logo-pengantin sec-2 animate__animated animate__pulse animate__infinite infinite" src="./images/pandawa/logo_pandawa_time.png" alt="Logo Pandawa" width="80%">
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
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Pandawa Awards 2023.</p>
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Pandawa Awards 2023.</p>
							<p class=\"js animate__animated\">Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<a class=\"demo js animate__animated\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\" data-lightbox=\"example-1\">
							<img class=\"example-image js animate__animated\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "&amp;size=200x200\" alt=\"QR Code " . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\">
							<img class=\"example-image js animate__animated\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "&amp;size=200x200\" alt=\"QR Code " . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\">
							</a><br \><div class=\"p-protokol js animate__animated\">Klik untuk memperbesar</div>";
							// https://www.jqueryscript.net/lightbox/lightbox2.html
						} else {
							// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
							// echo $actual_link;
							$actual_link = "Anonymous";
							echo "<h6 class=\"kepada js animate__animated\">Kepada Bapak/Ibu/Saudara/i,</h6><div class=\"nama-tamu js animate__animated js\">" . $actual_link . "</div>
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Pandawa Awards 2023.</p>
							<p class=\"js animate__animated\">Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<p class=\"js animate__animated\">Dengan senang hati, kami selaku panitia mengundang Anda untuk hadir di acara<br/>Pandawa Awards 2023.</p>
							<p class=\"js animate__animated\">Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<a class=\"demo js animate__animated\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "\" data-lightbox=\"example-1\">
							<img class=\"example-image js animate__animated\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "&amp;size=200x200\" alt=\"QR Code " . $actual_link . "\">
							</a><br \><div class=\"p-protokol js animate__animated\">Klik untuk memperbesar</div>";
						}
						?>
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
						<a class="demo js animate__animated" href="images/pandawa/bagus.png" data-lightbox="example-1">
							<img src="images/pandawa/bagus.png" alt="Bagus" class="img-responsive foto-pengantin js animate__animated">
						<div class="nama-pengantin-foto mempelai js animate__animated">Master of Ceremony 1</div>
						<a class="demo js animate__animated" href="images/pandawa/bagus.png" data-lightbox="example-1">
							<img src="images/pandawa/bagus.png" alt="Bagus" class="img-responsive foto-pengantin js animate__animated">
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
						echo "<p class=\"js animate__animated\">Intern<br /><span class=\"ortu\">Department PAM</span></p>";
						// echo "<p class=\"js animate__animated\">Putra ketiga dari<br /><span class=\"ortu\">Bapak " . $ayah_pria . " &amp; Ibu " . $ibu_pria . "</span></p>";
						echo "<p class=\"js animate__animated\">Intern<br /><span class=\"ortu\">Department PAM</span></p>";
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
						<a class="demo js animate__animated" href="images/pandawa/mawar.png" data-lightbox="example-1">
							<img src="images/pandawa/mawar.png" alt="Mawar" class="img-responsive foto-pengantin js animate__animated">
						<div class="nama-pengantin-foto mempelai js animate__animated">Master of Ceremony 2</div>
						<a class="demo js animate__animated" href="images/pandawa/mawar.png" data-lightbox="example-1">
							<img src="images/pandawa/mawar.png" alt="Mawar" class="img-responsive foto-pengantin js animate__animated">
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
						<div class="big-date js animate__animated">04.OCT.23</div>
						<div class="big-date js animate__animated">04.OCT.23</div>
						<div id="demo"></div>
						<div class="simply-countdown simply-countdown-one js animate__animated"></div>
						<p><a href="https://calendar.google.com/calendar/u/0/r/eventedit?dates=20231004T020000Z/20231004T040000Z&crm=AVAILABLE&sprop=website:www.kn-sf.com/undangan&sprop=name:KN-SF&ctz=Asia/Jakarta&text=Pandawa+Awards+2023&location=PT.%20Sanghiang%20Perkasa%20-%20Kalbe%20Nutritionals,%20Kawasan%20Industri%20Indotaisei,%20Kalihurip,%20Kec.%20Cikampek,%20Karawang,%20Jawa%20Barat%2041373,%20Indonesia&details=Tanpa%20mengurangi%20rasa%20hormat%2C%20harap%20datang%2030%20menit%20sebelum%20acara%20dimulai%2C%20gunakan%20Dress%20code%20sesuai%20dengan%20yang%20sudah%20di%20tentukan%2C%20bawa%20undangan%20ini%20dan%20tunjukan%20QR%20Code%20kepada%20panitia%20untuk%20akses%20masuk." class="btn btn-default btn-sm js animate__animated" target="blank" rel="nofollow">Tambah ke Kalender</a></p>
						<p><a href="https://calendar.google.com/calendar/u/0/r/eventedit?dates=20231004T020000Z/20231004T040000Z&crm=AVAILABLE&sprop=website:www.kn-sf.com/undangan&sprop=name:KN-SF&ctz=Asia/Jakarta&text=Pandawa+Awards+2023&location=PT.%20Sanghiang%20Perkasa%20-%20Kalbe%20Nutritionals,%20Kawasan%20Industri%20Indotaisei,%20Kalihurip,%20Kec.%20Cikampek,%20Karawang,%20Jawa%20Barat%2041373,%20Indonesia&details=Tanpa%20mengurangi%20rasa%20hormat%2C%20harap%20datang%2030%20menit%20sebelum%20acara%20dimulai%2C%20gunakan%20Dress%20code%20sesuai%20dengan%20yang%20sudah%20di%20tentukan%2C%20bawa%20undangan%20ini%20dan%20tunjukan%20QR%20Code%20kepada%20panitia%20untuk%20akses%20masuk." class="btn btn-default btn-sm js animate__animated" target="blank" rel="nofollow">Tambah ke Kalender</a></p>
						<br />
						<div class="col-md-8 col-md-offset-2 text-center">
						<a class="demo js animate__animated" href="images/pandawa/events.png" data-lightbox="example-1">
							<img src="images/pandawa/events.png" alt="Event" class="img-responsive foto-pengantin js animate__animated">
						</a>
						<a class="demo js animate__animated" href="images/pandawa/events.png" data-lightbox="example-1">
							<img src="images/pandawa/events.png" alt="Event" class="img-responsive foto-pengantin js animate__animated">
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
								<p class="js animate__animated"><span style="font-weight:bold;">DIAMOND ROOM LT. 3</span><br />PT. Sanghiang Perkasa - Kalbe Nutritionals,<br />Kawasan Industri Indotaisei, Kalihurip, Kec. Cikampek,<br />Karawang, Jawa Barat 41373</p>
								<p><a href="https://maps.app.goo.gl/3wuVHxG1jPgWjUjt9" class="btn btn-default btn-sm btn-peta js animate__animated" target="blank">Lihat Peta</a></p>
								<p class="js animate__animated"><span style="font-weight:bold;">DIAMOND ROOM LT. 3</span><br />PT. Sanghiang Perkasa - Kalbe Nutritionals,<br />Kawasan Industri Indotaisei, Kalihurip, Kec. Cikampek,<br />Karawang, Jawa Barat 41373</p>
								<p><a href="https://maps.app.goo.gl/3wuVHxG1jPgWjUjt9" class="btn btn-default btn-sm btn-peta js animate__animated" target="blank">Lihat Peta</a></p>
								<img src="images/denaya/separator.png" alt="denaya_separator" class="img-responsive flower denaya-separator js animate__animated">
							</div>
							<iframe class="js animate__animated" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.357860273401!2d107.4120537!3d-6.4146679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697313a5df4371%3A0x7b098758ed16c78f!2sPT.%20Sanghiang%20Perkasa%20-%20Kalbe%20Nutritionals!5e0!3m2!1sen!2sid!4v1696298434771!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
							<iframe class="js animate__animated" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.357860273401!2d107.4120537!3d-6.4146679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697313a5df4371%3A0x7b098758ed16c78f!2sPT.%20Sanghiang%20Perkasa%20-%20Kalbe%20Nutritionals!5e0!3m2!1sen!2sid!4v1696298434771!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
							</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Protokol -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<img src="images/denaya/flower_top.png" alt="denaya_flower" class="img-responsive flower js animate__animated">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<p class="js animate__animated">Tanpa mengurangi rasa hormat, harap mengkuti peraturan yang sudah ditetapkan oleh panitia agar acara berjalan lancar dengan mengikuti protokol berikut:</p>
						<div class="col-md-8 col-md-offset-2 text-center kolom">
							<div class="text-center">
								<img src="images/pandawa/time.png" alt="Datang tepat waktu" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Datang 10 menit sebelum acara dimulai</div>
							</div>
							<div class="text-center">
								<img src="images/pandawa/jas.png" alt="Gunakan Jas" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Gunakan Dresscode sesuai ketentuan berupa smart casual</div>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center kolom">
							<div class="text-center">
								<img src="images/pandawa/tiket_icon.png" alt="Tiket" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Siapkan tiket virtual ini sebagai akses masuk</div>
								<img src="images/pandawa/tiket_icon.png" alt="Tiket" class="img-responsive logo-qrcode js animate__animated">
								<div class="p-protokol js animate__animated">Siapkan tiket virtual ini sebagai akses masuk</div>
							</div>
							<div class="text-center">
								<img src="images/pandawa/scan.png" alt="Scan QR Code" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
								<div class="p-protokol js animate__animated">Tunjukan QR Code saat memasuki tempat acara</div>
								<img src="images/pandawa/scan.png" alt="Scan QR Code" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
								<div class="p-protokol js animate__animated">Tunjukan QR Code saat memasuki tempat acara</div>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center">
							<img src="images/pandawa/nolaptop.png" alt="No Laptop" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
							<div class="p-protokol js animate__animated">Dilarang membawa laptop ke dalam ruangan</div>
							<img src="images/pandawa/nolaptop.png" alt="No Laptop" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
							<div class="p-protokol js animate__animated">Dilarang membawa laptop ke dalam ruangan</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Gallery -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="nama-pengantin-foto js animate__animated">Galeri Foto Pandawa Awards 2023 Mid Year</div>
						<div class="nama-pengantin-foto js animate__animated">Galeri Foto Pandawa Awards 2023 Mid Year</div>
						<div class="splide" id="slider2" role="group" aria-label="Splide Basic HTML Example">
							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/slide_5.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_5.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_5.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_5.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
										<br />
										<a class="demo js animate__animated" href="images/pandawa/slide_2.jpg" data-lightbox="example-1">
											<img src="images/pandawa/nandur.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_2.jpg" data-lightbox="example-1">
											<img src="images/pandawa/nandur.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/ffa.jpg" data-lightbox="example-1">
											<img src="images/pandawa/ffa.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										<a class="demo js animate__animated" href="images/pandawa/ffa.jpg" data-lightbox="example-1">
											<img src="images/pandawa/ffa.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/nandur.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_2.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/nandur.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_2.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
										<br />
										<a class="demo js animate__animated" href="images/pandawa/slide_3.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_3.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_3.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_3.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/gilang_andrian.jpg" data-lightbox="example-1">
											<img src="images/pandawa/gilang_andrian.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										<a class="demo js animate__animated" href="images/pandawa/gilang_andrian.jpg" data-lightbox="example-1">
											<img src="images/pandawa/gilang_andrian.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/eka.jpg" data-lightbox="example-1">
											<img src="images/pandawa/eka.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										<a class="demo js animate__animated" href="images/pandawa/eka.jpg" data-lightbox="example-1">
											<img src="images/pandawa/eka.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/slide_1.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_1.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_1.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_1.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
										<br />
										<a class="demo js animate__animated" href="images/pandawa/slide_4.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_4.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_4.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_4.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/mahajiwa.jpg" data-lightbox="example-1">
											<img src="images/pandawa/mahajiwa.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										<a class="demo js animate__animated" href="images/pandawa/mahajiwa.jpg" data-lightbox="example-1">
											<img src="images/pandawa/mahajiwa.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/majimun.jpg" data-lightbox="example-1">
											<img src="images/pandawa/majimun.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										<a class="demo js animate__animated" href="images/pandawa/majimun.jpg" data-lightbox="example-1">
											<img src="images/pandawa/majimun.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/rekiyudi.jpg" data-lightbox="example-1">
											<img src="images/pandawa/rekiyudi.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/rekiyudi.jpg" data-lightbox="example-1">
											<img src="images/pandawa/rekiyudi.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
										<br />
										<a class="demo js animate__animated" href="images/pandawa/slide_7.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_7.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_7.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_7.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
									</li>
									<li class="splide__slide">
										<a class="demo js animate__animated" href="images/pandawa/slide_8.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_8.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_8.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_8.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
										<br />
										<a class="demo js animate__animated" href="images/pandawa/slide_9.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_9.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										<a class="demo js animate__animated" href="images/pandawa/slide_9.jpg" data-lightbox="example-1">
											<img src="images/pandawa/slide_9.jpg" alt="denaya_prewed" class="img-responsive foto-pengantin slide-landscape">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<!-- Quote -->
		<div id="fh5co-couple" class="bg-carton fit-screen">
			<div class="container">
				<div class="row">
					<div class="nama-pengantin-foto js animate__animated">Quotes Head Of Plant</div>
					<div class="nama-pengantin-foto js animate__animated">Quotes Head Of Plant</div>
					<div class="col-md-8 col-md-offset-2 text-center text-papper bg-papper-div">
						<figure>
							<p class="color-theme js animate__animated">
								Masa depan itu kaya sekumpulan tempe
							</p>
							<p class="js animate__animated">Tidak ada yang TAHU</p>
								Masa depan itu kaya sekumpulan tempe
							</p>
							<p class="js animate__animated">Tidak ada yang TAHU</p>
							<!-- <blockquote cite="https://nandurstudio.com"> -->
							<!-- </blockquote> -->
							<figcaption class="js animate__animated">—Fajar Fauzan : <cite>Head of Plant</cite></figcaption>
							<figcaption class="js animate__animated">—Fajar Fauzan : <cite>Head of Plant</cite></figcaption>
						</figure>
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
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row">
							<div class="nama-pengantin-foto js animate__animated">Reservasi Kehadiran</div>
							<div class="nama-pengantin-foto js animate__animated">Reservasi Kehadiran</div>
						</div>
						<iframe name="content-reservasi" style="display:none">
						</iframe>
						<form id="wishForm" class="form-inline" action="./php/wish.php" method="post" target="content-reservasi">
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name" class="custom-label"><i class="icon-user"></i> Nama Pada Undangan</label>
										<input type="name" name="name" id="name" class="form-control" placeholder="Nama tamu" disabled></input>
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
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-check checkleft">
										<input class="form-check-input" type="checkbox" id="namachat" name="namachat" value="namachatsama">
										<label class="form-check-label checkcap">Nama saya sama dengan nama pada undangan</label>
									</div>
									<div class="form-group">
										<label for="name-anda" class="custom-label"><i class="icon-pencil"></i> Nama Anda</label>
										<input type="name" name="namareservasi" id="namareservasi" class="form-control" placeholder="Masukan nama/centang opsi di atas untuk ucapan realtime"></input>
									</div>
									<div class="form-group">
										<label for="name-anda" class="custom-label"><i class="icon-pencil"></i> Nama Anda</label>
										<input type="name" name="namareservasi" id="namareservasi" class="form-control" placeholder="Masukan nama/centang opsi di atas untuk ucapan realtime"></input>
									</div>
								</div>
							</div>
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
										<label for="wish" class="custom-label"><i class="icon-chat"></i> Komentar</label>
										<label for="wish" class="custom-label"><i class="icon-chat"></i> Komentar</label>
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
											$nama_reservasi = 'Anonymous';
											$nama_reservasi = 'Anonymous';
										}
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
										} else {
											$alamat = '';
										}
										$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
										$result_query = mysqli_query($conn, $query);

										if (mysqli_num_rows($result_query) > 0) {
											// output data of each row
											while ($row = mysqli_fetch_assoc($result_query)) {
												echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Berikan komentar atau alasan jika tidak bisa hadir\">" . $row["ucapan"] . "</textarea>";
												echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Berikan komentar atau alasan jika tidak bisa hadir\">" . $row["ucapan"] . "</textarea>";
											}
										} else {
											echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Berikan komentar atau alasan jika tidak bisa hadir\"></textarea>";
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
							<div class="row js animate__animated">
								<div class="col-md-12">
									<div class="form-group">
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
											$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
											$result_query = mysqli_query($conn, $query);

											if (mysqli_num_rows($result_query) > 0) {
												// output data of each row
												while ($row = mysqli_fetch_assoc($result_query)) {
													if ($row["attending"] = "0") {
														echo "<option selected=\"\" class=\"optionbox\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"\" class=\"optionbox\" value=\"1\">Akan Hadir</option>";
														echo "<option selected=\"selected\" class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
													} elseif ($row["attending"] = "1") {
														echo "<option selected=\"\" class=\"optionbox\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"selected\" class=\"optionbox\" value=\"1\">Akan Hadir</option>";
														echo "<option selected=\"\" class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
													} else {
														echo "<option selected=\"selected\" class=\"optionbox\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"\" class=\"optionbox\" value=\"1\">Akan Hadir</option>";
														echo "<option selected=\"\" class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
													}
												}
											} else {
												echo "<option selected=\"selected\" class=\"optionbox\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
												echo "<option selected=\"\" class=\"optionbox\" value=\"1\">Akan Hadir</option>";
												echo "<option selected=\"\" class=\"optionbox\" value=\"0\">Tidak Bisa Hadir</option>";
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
							<div class="row js animate__animated" id="divjumlahtamu">
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
										$query = "SELECT nama, namareservasi, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE namareservasi ='$nama_reservasi' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
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
								<div class="col-md-8 col-md-offset-6 text-center">
								<div class="col-md-8 col-md-offset-6 text-center">
									<button type="submit" name="submit" value="submit" class="btn btn-default btn-block" onclick="return clickButton();">Kirim</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-12">
						<form class="form-inline">
							<div class="form-group">
								<?php
								include "./php/connection.php";
								$guest_query = "SELECT COUNT(namareservasi) AS namareservasi, date FROM tr_ucapan WHERE date in (SELECT MAX(date) from tr_ucapan GROUP BY namareservasi) ORDER BY `tr_ucapan`.`date` DESC;";
								$guest_count = mysqli_query($conn, $guest_query);
								$row = mysqli_fetch_assoc($guest_count);
								$ucapan = $row['namareservasi'];
								echo "<label for=\"minichat\" class=\"custom-label\"><i class=\"icon-twitter\"></i> " . $ucapan . " Ucapan</label>";
								?>
								<div class="fh5co-started form-control" style="height: 300px; overflow: auto;">
									<div id="minichat">
										<?php
										while ($row = mysqli_fetch_assoc($shouts)) :
											echo "<div style=\"text-align: left;\">";
											echo "<strong>" . ucwords(strtolower($row["namareservasi"])) . " </strong>";
											$att = $row["attending"];
											$tamu = $row["jumlahtamu"];
											if ($att == 1) {
												if ($tamu == 1) {
													echo "<span class=\"hadir\">Akan Hadir Sendiri</span>";
												} else {
													echo "<span class=\"hadir\">Akan Hadir Ber-" . $tamu . "</span>";
												}
											} elseif ($att == 0) {
												echo "<span class=\"hadir tidak-hadir\">Tidak Bisa Hadir</span>";
											} else {
												echo "<span class=\"hadir tidak-konfirmasi\">Tidak Konfirmasi</span>";
											}
											echo "<p class=\"wishtext\">" . $row['ucapan'];
											echo "<time class=\"timeago timestamp\" datetime=\"" . $row["date"] . "\">";
											echo "</time></p></div>";
										endwhile; ?>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<p id="msg"></p>
				<div class="row">
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
		<footer id="fh5co-footer" role="contentinfo" class="bg-carton">
			<div class="container">
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<!-- <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> -->
							<small class="block">&copy; 2022 Nandur Studio. All Rights Reserved.</small>
							<!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
							<small class="block">Web Invitation by <a href="https://www.nandurstudio.com" target="_blank">Nandur Studio Event</a>
								</br>Design by <a href="https://instagram.com/nandur.studio" target="_blank">Nandur Studio</a>
							<small class="block">Web Invitation by <a href="https://www.nandurstudio.com" target="_blank">Nandur Studio Event</a>
								</br>Design by <a href="https://instagram.com/nandur.studio" target="_blank">Nandur Studio</a>
								</br>Master Template: <a href="http://freehtml5.co/" target="_blank">&copy; 2016 Free HTML5. All Rights Reserved.</a></small>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/NandurStudio"><i class="icon-twitter"></i></a></li>
							<li><a href="https://web.facebook.com/n93animasi"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/nandangduryat/"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://dribbble.com/nandur93"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
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
		<source src="./sounds/aurora_existforlove.mp3" type="audio/mp3">
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
	<script src="js/splide-extension-auto-scroll.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/splide-renderer.min.js"></script>
	<script src="js/jquery.timeago.js"></script>
	<script src="node_modules/clipboard/dist/clipboard.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			//your code here
			if ($('#konfirmasi-kehadiran :selected').text() == 'Tidak Bisa Hadir') {
				$('#jumlahtamu').val('').attr('disabled', 'disabled');
				$('#divjumlahtamu').hide('3');
			}
			$('#konfirmasi-kehadiran').on('change', function(e) {
				var optionSelected = $("option:selected", this);
				var valueSelected = this.value;
				if (valueSelected == '0') {
					$('#jumlahtamu').val('').attr('disabled', 'disabled');
					$('#divjumlahtamu').hide('3');
				} else {
					$('#jumlahtamu').val(1).removeAttr('disabled');
					$('#divjumlahtamu').show('3');
				}
			});
			//set initial state.
			$('#namachat').click(function() {
				if ($(this).prop('checked')) {
					// do what you need here
					$('#namareservasi').val($('#name').val());
				} else {
					// do what you need here         
					$('#namareservasi').val('');
				}
			});
		});

		function clickButton() {
			var name = document.getElementById('name').value;
			var namareservasi = document.getElementById('namareservasi').value;
			var alamat = document.getElementById('alamat').value;
			var wish = document.getElementById('wish').value;
			var attending = document.getElementById('konfirmasi-kehadiran').value;
			var jumlahtamu = document.getElementById('jumlahtamu').value;
			var sesi = document.getElementById('sesi-reservasi').value;
			if ($('#namareservasi').val() == '') {
				alert('Mohon isi nama terlebih dahulu');
				return false;
			} else if ($('#wish').val() == '') {
				alert('Silakan untuk mengisi ucapan atau kata-kata penyemangat acara');
				alert('Silakan untuk mengisi ucapan atau kata-kata penyemangat acara');
				return false;
			} else if ($('#konfirmasi-kehadiran :selected').text() == 'Akan Hadir' && $('#jumlahtamu').val() == '') {
				alert('Mohon isi jumlah tamu yang akan hadir');
				return false;
			} else if ($('#konfirmasi-kehadiran :selected').text() == 'Akan Hadir' && $('#jumlahtamu').val() <= 0) {
				alert('Jumlah tamu termasuk Anda minimal 1');
				return false;
			} else {
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
						'sesi': sesi
					},
					cache: false,
					success: function(html) {
						$('#msg').html(html);
						$('#minichat').html(html);
						$('#minichat').load(location.href + " #minichat");
						alert('Confirmation sent. Thank you!')
						$('#wish').val('');
						// $('#jumlahtamu').val('');
						//$('#konfirmasi-kehadiran').prop('selectedIndex', 0);
						//$('#reservasiForm').trigger('reset');
						$('#guest-count-icon').html(html);
						$('#guest-count-icon').load(location.href + " #guest-count-icon");
					}
				});
				return false;
			}
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
		document.addEventListener('DOMContentLoaded', function() {
			const splide = new Splide('.splide', {
				type: 'loop',
				drag: 'free',
				focus: 'center',
				perPage: 1,
				autoplay: true,
				autoScroll: {
					speed: 2,
				},
			});
			splide.mount();
		});
		var d = new Date(new Date("Oct 04, 2023 09:00:00").getTime());
		var d = new Date(new Date("Oct 04, 2023 09:00:00").getTime());
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

		// https://stackoverflow.com/a/41108381/7772358
		//var audioElement = new Audio('./sounds/AURORA_Exist_For_Love.mp3');

		//const soundEffect = new Audio();
		//soundEffect.autoplay = true;

		// onClick of first interaction on page before I need the sounds
		// (This is a tiny MP3 file that is silent and extremely short - retrieved from https://bigsoundbank.com and then modified)
		//soundEffect.src = "data:audio/mpeg;base64,SUQzBAAAAAABEVRYWFgAAAAtAAADY29tbWVudABCaWdTb3VuZEJhbmsuY29tIC8gTGFTb25vdGhlcXVlLm9yZwBURU5DAAAAHQAAA1N3aXRjaCBQbHVzIMKpIE5DSCBTb2Z0d2FyZQBUSVQyAAAABgAAAzIyMzUAVFNTRQAAAA8AAANMYXZmNTcuODMuMTAwAAAAAAAAAAAAAAD/80DEAAAAA0gAAAAATEFNRTMuMTAwVVVVVVVVVVVVVUxBTUUzLjEwMFVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/zQsRbAAADSAAAAABVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVf/zQMSkAAADSAAAAABVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV";


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
					overflow: 'auto'
				});
				$("#cover").fadeOut(300, function() {
					$(this).remove();
				});
				$('.play').hide();
				$('.pause').css('display', 'inline-block');
				// $('#logo-pengantin').addClass('animate__animated animate__bounceInDown');
			});
			// $('#exampleModalCenter').modal('show');
			// var timeleft = 20;
			// var downloadTimer = setInterval(function() {
			// 	if (timeleft <= 0) {
			// 		clearInterval(downloadTimer);
			// 		// put your default event here
			// 		$("#exampleModalCenter").modal('hide');
			// 		$("html").removeClass("cover-height");
			// 		$("body").removeClass("cover-height");
			// 		$("#cover").fadeOut(300, function() {
			// 			$(this).remove();
			// 		});
			// 		$('.play').hide();
			// 		$('.pause').css('display', 'inline-block');
			// 		audioElement.play();
			// 	} else {
			// 		document.getElementById("countdown").innerHTML = timeleft + " seconds.";
			// 	}
			// 	timeleft -= 1;
			// }, 1000);
		});

		// $("#exampleModalCenter").on("hidden.bs.modal", function() {
		// 	// put your default event here
		// 	$("html").removeClass("cover-height");
		// 	$("body").removeClass("cover-height");
		// 	$("#cover").fadeOut(300, function() {
		// 		$(this).remove();
		// 	});
		// 	$('.play').hide();
		// 	$('.pause').css('display', 'inline-block');
		// 	audioElement.play();
		// });
	</script>
</body>

</html>