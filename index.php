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
	$shout_query = "SELECT * FROM tr_ucapan ORDER BY ucapanId DESC";
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
	$the_wedding = "Lembar Undangan " . $pengantin_pria . " &amp; " . $pengantin_wanita;
	$the_desc = "Assalamu'alaikum Wr. Wb.
	Bismillahirrahmanirrahim
	Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami,
	
	" . $pengantin_pria . "
	&
	" . $pengantin_wanita . "
	
	Pada :
	Minggu, 22 Mei 2022
	
	Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.
	Berkaitan dengan pembatasan sosial pada masa pandemi Covid-19, untuknya agar tetap menggunakan masker dan hadir sesuai waktu yang telah ditentukan.
	
	Terima kasih,
	Wassalamuallaikum Wr. Wb.
	
	Kami yang berbahagia,
	" . $pengantin_pria . " &amp; " . $pengantin_wanita."";
	echo "<title>" . $the_wedding . "</title>";
	echo "<meta name=\"description\" content=\"" . $the_desc . "\" />";

	mysqli_close($conn);
	//https://stackoverflow.com/a/15864222/7772358
	//echo $_GET['to'];
	//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="wedding, Naufal, Denaya" />
	<meta name="author" content="Nandur Digital Invitation" />

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
	<meta property="og:title" content="Pernikahan Naufal & Denaya" />
	<meta property="og:image" content="images/denaya/og_image.png" />
	<meta property="og:url" content="https://naufal-denaya.lembarundangan.com" />
	<meta property="og:site_name" content="Lembar Undangan Digital" />
	<meta property="og:description" content="Minggu, 22 Mei 2022" />
	<meta name="twitter:title" content="Pernikahan Naufal & Denaya" />
	<meta name="twitter:image" content="images/denaya/og_image.png" />
	<meta name="twitter:url" content="https://naufal-denaya.lembarundangan.com" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&family=Style+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;1,300;1,400;1,500;1,600&family=Karla&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="icon" type="image/x-icon" href="./images/denaya/LOGONDA_brown_120x101.ico">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
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
	<link rel="stylesheet" href="css/tooltips.scss">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<!-- 
<main>
	<section class="ndu-section">
	</section>
	<section class="ndu-section">
	</section>
	<section class="ndu-section">
	</section>
	<section class="ndu-section">
		<h2>Section 4</h2>
	</section>
	<section class="ndu-section">
		<h2>Section 5</h2>
	</section>
</main> -->

<body id="body1" class="cover-height">
	<div class="cover" id="cover">

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
			<div class="col-md-8 col-md-offset-2 text-center animate-box">
				<?php
				include "./php/connection.php";
				$sql_pria = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='1'";
				$result_pria = mysqli_query($conn, $sql_pria);
				$sql_wanita = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='2'";
				$result_wanita = mysqli_query($conn, $sql_wanita);

				if (mysqli_num_rows($result_pria) > 0) {
					// output data of each row
					while ($row = mysqli_fetch_assoc($result_pria)) {
						echo "<div class=\"nama-pengantin pria\">" . $row["txtNamaDepan"] . "</div>";
					}
				} else {
					echo "0 results";
				}
				echo "<img class=\"logo-pengantin\" src=\".\images\denaya\LOGONDA_brown_120x101.png\" alt=\"Logo Naufal And Denaya\" width=\"100\" height=\"81\">";
				if (mysqli_num_rows($result_wanita) > 0) {
					// output data of each row
					while ($row = mysqli_fetch_assoc($result_wanita)) {
						echo "<div class=\"nama-pengantin wanita\">" . $row["txtNamaDepan"] . "</div>";
					}
				} else {
					echo "0 results";
				}

				mysqli_close($conn);
				//https://stackoverflow.com/a/15864222/7772358

				//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

				?>
			</div>
			<div class="col-md-8 col-md-offset-2 text-center animate-box">
				<button id="tombol-buka" type="submit" class="btn btn-buka">Buka Undangan</button>
			</div>
		</div>
	</div>
	<div id="page">
		<!-- <nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="./">Wedding<strong>.</strong></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="./">Home</a></li>
							<li><a href="about.html">Story</a></li>
							<li class="has-dropdown">
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
		</nav> -->
		<header id="fh5co-header" class="fh5co-cover mid" role="banner" style="background-image:url(images/denaya/cover_denaya2.jpg);" data-stellar-background-ratio="0.5">
			<!-- <div class="overlay"></div> -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="display-t">
							<div class="display-tc" data-animate-effect="fadeIn">
								<img class="logo-pengantin sec-2" src=".\images\denaya\LOGONDA_brown_120x101.png" alt="Logo Naufal And Denaya" width="20%">
								<div class="hari-pernikahan">Hari Pernikahan</div>
								<?php
								include "./php/connection.php";
								$sql_pria = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='1'";
								$result_pria = mysqli_query($conn, $sql_pria);
								$sql_wanita = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='2'";
								$result_wanita = mysqli_query($conn, $sql_wanita);

								if (mysqli_num_rows($result_pria) > 0) {
									// output data of each row
									while ($row = mysqli_fetch_assoc($result_pria)) {
										echo "<div class=\"nama-pengantin\">" . $row["txtNamaDepan"];
									}
								} else {
									echo "0 results";
								}
								echo " &amp; ";
								if (mysqli_num_rows($result_wanita) > 0) {
									// output data of each row
									while ($row = mysqli_fetch_assoc($result_wanita)) {
										echo $row["txtNamaDepan"] . "</div>";
									}
								} else {
									echo "0 results";
								}

								mysqli_close($conn);
								//https://stackoverflow.com/a/15864222/7772358

								//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

								?>
								<div class="nama-tanggal">Minggu, 22 Mei 2022</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box text-papper bg-papper-div">
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
							echo "<h6 class=\"kepada\">Kepada Bapak/Ibu/Saudara/i,</h6><div class=\"nama-tamu\">" . $decrypted_string . "</div>
							<p>Dengan senang hati,<br/>kami mengundang Anda untuk hadir<br/>di acara pernikahan kami.</p>
							<p>Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:</p>
							<a class=\"demo\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\" data-lightbox=\"example-1\">
							<img class=\"example-image\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $guest_name . " From " . $alamat . "&amp;size=150x150\" alt=\"QR Code " . $guest_name . " From " . $alamat . " Sesi " . $sesi . "\">
							</a><br \><div class=\"p-protokol\">Klik untuk memperbesar</div>";
							// https://www.jqueryscript.net/lightbox/lightbox2.html
						} else {
							// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
							// echo $actual_link;
							$actual_link = "Anonymous";
							echo "<h6>Kepada Bapak/Ibu/Saudara/i,</h6><h3>" . $actual_link . "</h3>
							<p>\"Dengan senang hati,<br/>kami mengundang Anda untuk hadir<br/>di acara pernikahan kami.\"</p>
							<p>\"Silakan tunjukan QR Code dibawah ini<br/>untuk memasuki tempat acara:\"</p>
							<a class=\"demo\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "\" data-lightbox=\"example-1\">
							<img class=\"example-image\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "&amp;size=150x150\" alt=\"QR Code " . $actual_link . "\">
							</a><br \><div class=\"p-protokol\">Klik untuk memperbesar</div>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<img src="images/denaya/naufal_flower.png" alt="naufal" class="img-responsive foto-pengantin">
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
							echo "<div class=\"nama-pengantin-foto\">" . $pengantin_pria . "</div>
							</a>";
							echo "<p>Putra ketiga dari<br />Bapak " . $ayah_pria . "</br>&amp;</br>Ibu " . $ibu_pria . "</p>";

							mysqli_close($conn);
							//https://stackoverflow.com/a/15864222/7772358
							//echo $_GET['to'];
							//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
							?>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<img src="images/denaya/denaya_flower.png" alt="denaya" class="img-responsive foto-pengantin">
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
								echo "0 results";
							}

							if (mysqli_num_rows($result_ayah_wanita) > 0) {
								// output data of each row
								while ($row = mysqli_fetch_assoc($result_ayah_wanita)) {
									$ayah_wanita = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
								}
							} else {
								echo "0 results";
							}

							if (mysqli_num_rows($result_ibu_wanita) > 0) {
								// output data of each row
								while ($row = mysqli_fetch_assoc($result_ibu_wanita)) {
									$ibu_wanita = $row["txtNamaDepan"] . " " . $row["txtNamaBelakang"] . " " . $row["txtTitle"];
								}
							} else {
								echo "0 results";
							}

							echo "<div class=\"nama-pengantin-foto\">" . $pengantin_wanita . "</div>
							</a>";
							echo "<p>Putri kedua dari<br />Bapak " . $ayah_wanita . "</br>&amp;</br>Ibu " . $ibu_wanita . "</p>";
							mysqli_close($conn);
							//https://stackoverflow.com/a/15864222/7772358
							//echo $_GET['to'];
							//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="big-date">22.05.22</div>
						<div id="demo"></div>
						<div class="simply-countdown simply-countdown-one"></div>
						<p><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=NGViOGRza28zYXR0M2piZDhqa3BuamhyYWogbmFuZGFuZy5kaGVAbQ&tmsrc=nandang.dhe%40gmail.com" class="btn btn-default btn-sm" target="blank">Tambah ke Kalender</a></p>

						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<div class="akad-nikah">Akad Nikah</div>
							<div class="waktu-akad-nikah">15.30 WIB - 16.30 WIB</div>
							<br />
							<div class="akad-nikah">Resepsi</div>
							<?php
							if (isset($_GET['s'])) {
								$sesi = htmlspecialchars($_GET['s']); // Getting parameter value inside PHP variable
								if ($sesi == "1") {
									echo "<div class=\"waktu-akad-nikah\">18.30 WIB - 19.30 WIB</div>";
								} elseif ($sesi == "2") {
									echo "<div class=\"waktu-akad-nikah\">19.30 WIB - 20.20 WIB</div>";
								} else {
									echo "<div class=\"waktu-akad-nikah\">18.30 WIB - 20.20 WIB</div>";
								}
							} else {
								// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
								// echo $actual_link;
								echo "<div class=\"waktu-akad-nikah\">18.30 WIB - 20.20 WIB</div>";
							}
							?>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<img src="images/denaya/separator.png" alt="denaya_separator" class="img-responsive flower denaya-separator">
							<p><span style="font-weight:bold;">KAMPUNG BATU MALAKASARI</span><br />Jl. Raya Banjaran Rencong, Malakasari,<br />Kec. Baleendah, Kabupaten Bandung,<br />Jawa Barat 40375</p>
							<p><a href="https://goo.gl/maps/J2niHYyzsmvpLYx46" class="btn btn-default btn-sm btn-peta" target="blank">Lihat Peta</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="nama-pengantin-foto">Galeri Foto</div>
						<div class="splide" id="slider2" role="group" aria-label="Splide Basic HTML Example">
							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<img src="images/denaya/slide_1.png" alt="denaya_prewed" class="img-responsive"><br />
										<img src="images/denaya/slide_6.png" alt="denaya_prewed" class="img-responsive">
									</li>
									<li class="splide__slide">
										<img src="images/denaya/slide_2.png" alt="denaya_prewed" class="img-responsive">
									</li>
									<li class="splide__slide">
										<img src="images/denaya/slide_3.png" alt="denaya_prewed" class="img-responsive"><br />
										<img src="images/denaya/slide_7.png" alt="denaya_prewed" class="img-responsive">
									</li>
									<li class="splide__slide">
										<img src="images/denaya/slide_4.png" alt="denaya_prewed" class="img-responsive">
									</li>
									<li class="splide__slide">
										<img src="images/denaya/slide_5.png" alt="denaya_prewed" class="img-responsive">
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<img src="images/denaya/flower_top.png" alt="denaya_flower" class="img-responsive flower">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<p>Tanpa mengurangi rasa hormat,<br />untuk mencegah terjadi penyebaran virus,<br />para tamu, diharapkan selalu menerapkan<br />protokol kesehatan selama<br />acara berlangsung sebagai berikut:</p>
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<img src="images/denaya/protokol_QRCode.png" alt="denaya_qr_code" class="img-responsive logo-qrcode">
							<div class="p-protokol">Tunjukan QR Code<br />saat memasuki tempat acara</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center animate-box kolom">
							<div class="text-center animate-box">
								<img src="images/denaya/protokol_hand_sanitizer.png" alt="denaya_hand_sanitizer" class="img-responsive logo-qrcode">
								<div class="p-protokol">Bersihkan Tangan dengan<br />sabun atau hand sanitizer<br />yang disediakan</div>
							</div>
							<div class="text-center animate-box">
								<img src="images/denaya/protokol_masker.png" alt="denaya_masker" class="img-responsive logo-qrcode">
								<div class="p-protokol">Selalu gunakan<br />masker kecuali<br />saat makan</div>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<img src="images/denaya/protokol_jaga_jarak.png" alt="denaya_jaga_jarak" class="img-responsive logo-qrcode logo-jaga-jarak">
							<div class="p-protokol">Menjaga jarak dengan tamu lain,<br />hindari kontak fisik<br />dan jauhi keurumunan</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="nama-pengantin-foto">Lokasi</div>
						<div id="map" class="fh5co-map event-wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1979.9996528745824!2d107.6069444!3d-7.0093633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9629a85b063%3A0xd9692b1ae0a46add!2sKampung%20Batu%20Malakasari%20Ecopark!5e0!3m2!1sen!2sid!4v1651043392876!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</iframe>
							<div class="bride">
								<a href="https://goo.gl/maps/J2niHYyzsmvpLYx46" target="_blank"><img src="images/buka-google-maps-logo-indo-1024x123.jpg" alt="Tombol buka Google Maps" style="width:350px;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="row animate-box">
							<div class="nama-pengantin-foto">Ucapan, Do'a Restu & Reservasi Kehadiran</div>
							<p>Ungkapkan sesuatu bagi calon pengantin</p>
						</div>
						<div class="row animate-box">
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
												$guest_query = "SELECT sum(jumlahtamu) as jumlahtamu FROM `tr_ucapan`";
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
						<iframe name="content-reservasi" style="display:none">
						</iframe>
						<form id="wishForm" class="form-inline" action="./php/wish.php" method="post" target="content-reservasi">
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name" class="custom-label">Nama Tamu</label>
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
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat" class="custom-label">Alamat</label>
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
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="sesi-reservasi" class="custom-label">Sesi</label>
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
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="wish" class="custom-label">Ucapan & Do'a Restu</label>
										<?php
										include "./php/connection.php";
										if (isset($_GET['to'])) {
											$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
											$rep_guest_name = str_replace('&amp;', '&', $guest_name);
										} else {
											$rep_guest_name = 'Anonymous';
										}
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
										} else {
											$alamat = '';
										}
										$query = "SELECT nama, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE nama ='$rep_guest_name' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
										$result_query = mysqli_query($conn, $query);

										if (mysqli_num_rows($result_query) > 0) {
											// output data of each row
											while ($row = mysqli_fetch_assoc($result_query)) {
												echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Ungkapkan ucapan dan do'a restumu untuk calon pengantin\">" . $row["ucapan"] . "</textarea>";
											}
										} else {
											echo "<textarea name=\"wish\" class=\"form-control\" id=\"wish\" placeholder=\"Ungkapkan ucapan dan do'a restumu untuk calon pengantin\"></textarea>";
										}
										mysqli_close($conn);
										//https://stackoverflow.com/a/15864222/7772358
										//echo $_GET['to'];
										//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
										?>
									</div>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<select name="konfirmasi-kehadiran" class="form-control" id="konfirmasi-kehadiran">
											<?php
											include "./php/connection.php";
											if (isset($_GET['to'])) {
												$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
												$rep_guest_name = str_replace('&amp;', '&', $guest_name);
											} else {
												$rep_guest_name = 'Anonymous';
											}
											if (isset($_GET['adr'])) {
												$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
											} else {
												$alamat = '';
											}
											$query = "SELECT nama, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE nama ='$rep_guest_name' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
											$result_query = mysqli_query($conn, $query);

											if (mysqli_num_rows($result_query) > 0) {
												// output data of each row
												while ($row = mysqli_fetch_assoc($result_query)) {
													if ($row["attending"] = "0") {
														echo "<option selected=\"\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"\" style=\"color: black;\" value=\"1\">Hadir</option>";
														echo "<option selected=\"selected\" style=\"color: black;\" value=\"0\">Tidak Hadir</option>";
													} elseif ($row["attending"] = "1") {
														echo "<option selected=\"\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"selected\" style=\"color: black;\" value=\"1\">Hadir</option>";
														echo "<option selected=\"\" style=\"color: black;\" value=\"0\">Tidak Hadir</option>";
													} else {
														echo "<option selected=\"selected\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
														echo "<option selected=\"\" style=\"color: black;\" value=\"1\">Hadir</option>";
														echo "<option selected=\"\" style=\"color: black;\" value=\"0\">Tidak Hadir</option>";
													}
												}
											} else {
												echo "<option selected=\"selected\" disabled=\"\" hidden=\"\" value=\"\">Konfirmasi Kehadiran</option>";
												echo "<option selected=\"\" style=\"color: black;\" value=\"1\">Hadir</option>";
												echo "<option selected=\"\" style=\"color: black;\" value=\"0\">Tidak Hadir</option>";
											}
											mysqli_close($conn);
											//https://stackoverflow.com/a/15864222/7772358
											//echo $_GET['to'];
											//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12">
									<div class="form-group">
										<label for="jumlahtamu" class="custom-label">Jumlah Tamu</label>
										<input type="number" class="form-control" id="jumlahtamu" placeholder="0"></input>
										<?php
										include "./php/connection.php";
										if (isset($_GET['to'])) {
											$guest_name = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
											$rep_guest_name = str_replace('&amp;', '&', $guest_name);
										} else {
											$rep_guest_name = 'Anonymous';
										}
										if (isset($_GET['adr'])) {
											$alamat = htmlspecialchars($_GET['adr']); // Getting parameter value inside PHP variable
										} else {
											$alamat = '';
										}
										$query = "SELECT nama, alamat, ucapan, attending, jumlahtamu FROM tr_ucapan WHERE nama ='$rep_guest_name' and alamat='$alamat' ORDER BY ucapanId DESC LIMIT 1";
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
							<div class="row animate-box">
								<div class="col-md-12">
									<button type="submit" name="submit" value="submit" class="btn btn-default btn-block" onclick="return clickButton();">Kirim</button>
								</div>
							</div>
						</form>
						<script type="text/javascript">
							function clickButton() {
								var name = document.getElementById('name').value;
								var alamat = document.getElementById('alamat').value;
								var wish = document.getElementById('wish').value;
								var attending = document.getElementById('konfirmasi-kehadiran').value;
								var jumlahtamu = document.getElementById('jumlahtamu').value;
								var sesi = document.getElementById('sesi-reservasi').value;
								if ($('#name').val() == '') {
									alert('Mohon isi nama terlebih dahulu');
									return false;
								} else if ($('#wish').val() == '') {
									alert('Silakan untuk mengisi ucapan kepada calon mempelai');
									return false;
								} else if ($('#konfirmasi-kehadiran :selected').text() == 'Konfirmasi Kehadiran') {
									alert('Pilih konfirmasi kehadiran');
									return false;
								} else if ($('#jumlahtamu').val() == '') {
									alert('Mohon isi jumlah tamu yang akan hadir');
									return false;
								} else {
									$.ajax({
										type: "post",
										url: "./php/wish.php",
										data: {
											'name': name,
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
											// alert('Confirmation sent. Thank you!')
											$('#wish').val('');
											$('#jumlahtamu').val('');
											$('#konfirmasi-kehadiran').prop('selectedIndex', 0);
											//$('#reservasiForm').trigger('reset');
											$('#guest-count-icon').html(html);
											$('#guest-count-icon').load(location.href + " #guest-count-icon");
											$(function() {
												$("time.timeago").timeago();
											});
										}
									});
									return false;
								}
							}
						</script>
						<div class="row animate-box">
							<div class="col-md-12">
								<form class="form-inline">
									<div class="form-group">
										<div class="fh5co-started form-control" style="height: 300px; overflow: auto;">
											<div id="minichat">
												<?php
												while ($row = mysqli_fetch_assoc($shouts)) :
													echo "<div style=\"text-align: left;\">";
													echo "<strong>" . ucwords(strtolower($row["nama"])) . " </strong>";
													$att = $row["attending"];
													if ($att == 1) {
														echo "<span class=\"hadir\">Hadir</span>";
													} elseif ($att == 0) {
														echo "<span class=\"hadir tidak-hadir\">Tidak Hadir</span>";
													} else {
														echo "<span class=\"hadir tidak-konfirmasi\">Tidak Konfirmasi</span>";
													}
													echo "<p>" . $row['ucapan'];
													echo "<time class=\"timeago\" style=\"text-align: right;display: flex;flex-direction: column-reverse;\" datetime=\"" . $row["date"] . "\">";
													echo "</time></p></div>";
												endwhile; ?>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<iframe name="content" style="display:none">
						</iframe>
						<p id="msg"></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="nama-pengantin-foto">Quotes</div>
						<figure>
							<p class="color-theme">
								وَمِنْ ءَايَٰتِهِۦٓ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَٰجًا لِّتَسْكُنُوٓا۟ إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً ۚ إِنَّ فِى ذَٰلِكَ
								لَءَايَٰتٍ لِّقَوْمٍ يَتَفَكَّرُونَ</p>
							<p>Wa min āyātihī an khalaqa lakum min anfusikum azwājal litaskunū ilaihā wa ja'ala bainakum mawaddataw wa raḥmah, inna fī żālika la`āyātil liqaumiy yatafakkarụn</p>
							<blockquote cite="https://nandurstudio.com">
								<p>Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
								</p>
							</blockquote>
							<figcaption>—QS. Ar - Rum : <cite>21</cite></figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="nama-pengantin-foto">Amplop Digital</div>
						<p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
						<div class="nama-pengantin-foto">Alamat Kirim Kado</div>
						<!-- 1. Define some markup -->
						<p id="alamat-kirim-kado">Jalan. jembatan I No.14 Rt.002 Rw.005 Condet Kel. Balekambang Kec. Kramatjati Jakarta Timur</p>
						<button id="copy-data" type="button" class="tooltipped tooltipped-w m-2 p-2 border btn" aria-label="Copied" data-clipboard-action="copy" data-clipboard-target="#alamat-kirim-kado">
							Copy
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- <div id="fh5co-couple" class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="nama-pengantin-foto">Quotes</div>
							<p>Ungkapkan sesuatu bagi calon pengantin</p>
						</div>
				</div>
			</div>
		</div> -->

		<!-- <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Are You Attending?</h2>
						<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-default btn-block">I am Attending</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->

		<footer id="fh5co-footer" role="contentinfo" class="bg-carton">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<!-- <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> -->
							<small class="block">&copy; 2022 Nandur Studio. All Rights Reserved.</small>
							<!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
							<small class="block">Designed by <a href="https://www.nandur93.com/search/label/Undangan" target="_blank">Nandur Studio Event</a></br>Master Template: <a href="http://freehtml5.co/" target="_blank">&copy; 2016 Free HTML5. All Rights Reserved.</a></small>
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
	</div>
	<div class="music-control">
		<span class='pause'></span>
		<span class='play'></span>
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

	<script>
		var clipboard = new ClipboardJS('.btn');

		clipboard.on('success', function(e) {
			e.clearSelection();
			$('#copy-data').text('Copied!');
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
		var d = new Date(new Date("May 22, 2022 08:00:00").getTime());
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
		var audioElement = new Audio('./sounds/AURORA_Exist_For_Love.mp3');

		$('.pause').on('click', function() {
			$(this).hide();
			$('.play').css('display', 'inline-block');
			audioElement.pause();
		});

		$('.play').on('click', function() {
			$(this).hide();
			$('.pause').css('display', 'inline-block');
			audioElement.play();
		});

		$("#tombol-buka").on('click', function() {
			$("#name-cover").fadeOut(300, function() {
				$(this).remove();
				// put your default event here
				$("html").removeClass("cover-height");
				$("body").removeClass("cover-height");
				$("#cover").fadeOut(300, function() {
					$(this).remove();
				});
				$('.play').hide();
				$('.pause').css('display', 'inline-block');
				audioElement.play();
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