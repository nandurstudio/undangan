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
	" . $pengantin_pria . " &amp; " . $pengantin_wanita . "";
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
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#bfa594">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#bfa594">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#bfa594">
	<link rel="icon" sizes="192x192" href="images/denaya/LOGONDA_brown_192.png">
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
	<meta property="og:image" content="images/denaya/og_image2.png" />
	<meta property="og:url" content="https://naufal-denaya.lembarundangan.com" />
	<meta property="og:site_name" content="Lembar Undangan Digital" />
	<meta property="og:description" content="Minggu, 22 Mei 2022 | Kampung Batu Malakasari" />
	<meta name="twitter:title" content="Pernikahan Naufal & Denaya" />
	<meta name="twitter:image" content="images/denaya/og_image2.png" />
	<meta name="twitter:url" content="https://naufal-denaya.lembarundangan.com" />
	<meta name="twitter:card" content="" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;1,300;1,400;1,500;1,600&family=Karla&display=swap" rel="stylesheet">

<link rel="icon" type="image/x-icon" href="images/denaya/favicon.ico">

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
	<link rel="stylesheet" href="css/splide.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>