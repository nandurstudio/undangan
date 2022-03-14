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
	$the_wedding = "Wedding of " . $pengantin_pria . " &amp; " . $pengantin_wanita;
	echo "<title>" . $the_wedding . "</title>";
	echo "<meta name=\"description\" content=\"" . $the_wedding . "\" />";

	mysqli_close($conn);
	//https://stackoverflow.com/a/15864222/7772358
	//echo $_GET['to'];
	//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="wedding, Noordiansyah, hilya dina rosyida" />
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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&family=Style+Script&display=swap" rel="stylesheet">

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
								<p>Press the close button to close this information/this information will be closed automatically after <span id="countdown">15</span> seconds.</p>
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
			<div class="col-md-4 col-sm-4">
				<div class="the-wedding-of">
					THE WEDDING OF
				</div>
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
				<button id="tombol-buka" type="submit" class="btn btn-default btn-block open-invitation">Open Invitation</button>
			</div>
		</div>
	</div>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
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
		</nav>
		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/WAF06834.JPG);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<?php
								include "./php/connection.php";
								$sql_pria = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='1'";
								$result_pria = mysqli_query($conn, $sql_pria);
								$sql_wanita = "SELECT txtNamaDepan, txtNamaBelakang FROM tb_user WHERE txtUndanganId ='2'";
								$result_wanita = mysqli_query($conn, $sql_wanita);

								if (mysqli_num_rows($result_pria) > 0) {
									// output data of each row
									while ($row = mysqli_fetch_assoc($result_pria)) {
										echo "<h1>" . $row["txtNamaDepan"];
									}
								} else {
									echo "0 results";
								}
								echo " &amp; ";
								if (mysqli_num_rows($result_wanita) > 0) {
									// output data of each row
									while ($row = mysqli_fetch_assoc($result_wanita)) {
										echo $row["txtNamaDepan"] . "</h1>";
									}
								} else {
									echo "0 results";
								}

								mysqli_close($conn);
								//https://stackoverflow.com/a/15864222/7772358

								//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

								?>
								<h2>We Are Getting Married</h2>
								<!-- <div id="demo"></div> -->
								<div class="simply-countdown simply-countdown-one"></div>
								<p><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=M29jbGwyaGRtYnVxYzdqOXFoaGExbGlrYmggZmFtaWx5MDc3OTU1ODAxMDU0MzM0MjExOTVAZw&tmsrc=family07795580105433421195%40group.calendar.google.com" class="btn btn-default btn-sm">Save the date</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">

						<?php
						if (isset($_GET['to'])) {
							$string_to_encrypt = htmlspecialchars($_GET['to']); // Getting parameter value inside PHP variable
							$alamat = htmlspecialchars($_GET['adr']);
							$password = "password";
							$encrypted_string = openssl_encrypt($string_to_encrypt, "AES-128-ECB", $password);
							$decrypted_string = openssl_decrypt($encrypted_string, "AES-128-ECB", $password);
							// echo $string_to_encrypt;
							// echo $encrypted_string;
							// echo $decrypted_string;
							echo "<h2>Dear!</h2><h3>" . $decrypted_string . "</h3>
							<a class=\"demo\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $decrypted_string . " From " . $alamat . "\" data-lightbox=\"example-1\">
							<img class=\"example-image\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $decrypted_string . " From " . $alamat . "&amp;size=150x150\" alt=\"QR Code " . $decrypted_string . " From " . $alamat . "\">
							</a>";
							// https://www.jqueryscript.net/lightbox/lightbox2.html
						} else {
							// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
							// echo $actual_link;
							$actual_link = "Anonymous";
							echo "<h2>Dear!</h2><h3>" . $actual_link . "</h3>
							<a class=\"demo\" href=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "\" data-lightbox=\"example-1\">
							<img class=\"example-image\" src=\"https://api.qrserver.com/v1/create-qr-code/?data=" . $actual_link . "&amp;size=150x150\" alt=\"QR Code " . $actual_link . "\">
							</a>";
						}
						?>
						</br>
						</br>
						<?php
						include "./php/connection.php";
						$sql_date = "SELECT "
						?>
						<h3>March 27<sup>th</sup>, 2022</br>Bandung, West Java</h3>
						<p>We invited you to celebrate our wedding</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<a href="https://opensea.io/assets/matic/0x2953399124f0cbb46d2cbacd8a89cf0599974963/81972791996590427740514901082602460536277616799024112984058926406245493506049/" target="blank">
								<img src="images/pengantin_pria_nft.png" alt="groom" class="img-responsive">
							</a>
						</div>
						<div class="desc-groom">
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
									$pengantin_pria = $row["txtNamaDepan"];
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
							echo "<a href=\"https://opensea.io/assets/matic/0x2953399124f0cbb46d2cbacd8a89cf0599974963/81972791996590427740514901082602460536277616799024112984058926407345005133825/\" target=\"blank\">
							<h3>" . $pengantin_pria . "</h3>
							</a>";
							echo "<p>3<sup>rd</sup> child of 3 siblings</br>Son of Mr. " . $ayah_pria . "</br>&amp;</br>Mrs. " . $ibu_pria . "</p>";

							mysqli_close($conn);
							//https://stackoverflow.com/a/15864222/7772358
							//echo $_GET['to'];
							//https://stackoverflow.com/questions/44003465/get-dynamic-number-parameter-in-php-from-url

							?>
						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2"></i></p>
					<div class="couple-half">
						<div class="bride">
							<a href="https://opensea.io/assets/matic/0x2953399124f0cbb46d2cbacd8a89cf0599974963/81972791996590427740514901082602460536277616799024112984058926407345005133825/" target="blank">
								<img src="images/pengantin_wanita_nft.png" alt="groom" class="img-responsive">
							</a>
						</div>
						<div class="desc-bride">
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

							echo "<a href=\"https://opensea.io/assets/matic/0x2953399124f0cbb46d2cbacd8a89cf0599974963/81972791996590427740514901082602460536277616799024112984058926407345005133825/\" target=\"blank\">
							<h3>" . $pengantin_wanita . "</h3>
							</a>";
							echo "<p>The 1<sup>st</sup> of 2 siblings</br>Daughter of Mr. " . $ayah_wanita . "</br>&amp;</br>Mrs. " . $ibu_wanita . "</p>";
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

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Special Events</span>
						<h2>Wedding Events</h2>
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Main Ceremony (Akad)</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>08:00 AM</span>
											<span>10:00 AM</span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Sunday 27</span>
											<span>March, 2022</span>
										</div>
										<i class="icon-map"></i>
										<p>GRAHA PINDAD</br>Jalan Gatot Subroto No.517, Kebon Kangkung, Kiaracondong, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Wedding Party (Resepsi)</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<?php
											if (isset($_GET['s'])) {
												$sesi = htmlspecialchars($_GET['s']); // Getting parameter value inside PHP variable
												if ($sesi == "1") {
													echo "
													<span>11:00 AM</span>
													<span>12:30 PM</span>
													";
												} elseif ($sesi == "2") {
													echo "
													<span>12:30 PM</span>
													<span>02:00 PM</span>
													";
												} else {
													echo "
													<span>10:00 AM</span>
													<span>02:00 PM</span>
													";
												}
											} else {
												// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?to=Guest";
												// echo $actual_link;
												echo "
												<span>10:00 AM</span>
												<span>02:00 PM</span>
												";
											}
											?>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Sunday 27</span>
											<span>March, 2022</span>
										</div>
										<i class="icon-map"></i>
										<p>GRAHA PINDAD</br>Jalan Gatot Subroto No.517, Kebon Kangkung, Kiaracondong, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple-story">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>We Love Each Other</span>
						<h2>Location</h2>
						<div id="map" class="fh5co-map event-wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.506884519555!2d107.6481692!3d-6.9351389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a9c2e210b3951e1!2sGraha%20Pindad!5e0!3m2!1sen!2sid!4v1644363024996!5m2!1sen!2sid" width="100%" height="100%" style="border:0;min-height:250px" allowfullscreen="" loading="lazy">
							</iframe>
							<div class="bride">
								<a href="https://goo.gl/maps/Q76muirvoCRAswicA" target="_blank"><img src="images/buka-google-maps-logo-indo-1024x123.jpg" alt="groom" style="width:350px;"></a>
							</div>
						</div>
						<!-- END map -->
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-users"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Estimated Guest</span>

								</div>
							</div>
							<!-- <div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-user"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">We Catter</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-calendar"></i>
									</span>
									<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Events Done</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-clock"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
									<span class="counter-label">Hours Spent</span>
								</div>
							</div> -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-couple-story">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">

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

						<!-- END map -->
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
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
		</div>

		<footer id="fh5co-footer" role="contentinfo">
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

	<!-- jQuery Modal -->
	<script src="./js/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="./css/jquery.modal.min.css" />

	<script>
		var d = new Date(new Date("Mar 27, 2022 08:00:00").getTime());
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
		var audioElement = new Audio('./sounds/turning_page_128kb.mp3');

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
			});
			$('#exampleModalCenter').modal('show');
			var timeleft = 20;
			var downloadTimer = setInterval(function() {
				if (timeleft <= 0) {
					clearInterval(downloadTimer);
					// put your default event here
					$("#exampleModalCenter").modal('hide');
					$("html").removeClass("cover-height");
					$("body").removeClass("cover-height");
					$("#cover").fadeOut(300, function() {
						$(this).remove();
					});
					$('.play').hide();
					$('.pause').css('display', 'inline-block');
					audioElement.play();
				} else {
					document.getElementById("countdown").innerHTML = timeleft;
				}
				timeleft -= 1;
			}, 1000);
		});

		$("#exampleModalCenter").on("hidden.bs.modal", function() {
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
	</script>
</body>

</html>