<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php
include "./php/header.php";
?>

<body>
	<div class="fh5co-loader"></div>
	<div id="page">

		<img src="./images/denaya/sealtip.png" class="sealtip">
		<div id="fh5co-couple" class="bg-carton" style="padding: 1.5em !important;">
			<div class="container" style="width:100% !important;">
				<div class="row">
					<div class="col-md-6 animate-box fadeInUp animated-fast bg-video">
						<div class="fh5co-video" style="height:720px">
							<div id="yt-wrap">
								<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
								<div id="ytplayer"></div>
							</div>
						</div>
						<style>
							ul {
								text-align: justify;
							}

							ul:after {
								content: '';
								display: inline-block;
								width: 100%;
							}

							ul:before {
								content: '';
								display: block;
								margin-top: -1.25em;
							}

							li {
								display: inline-block;
								font: 1em/1.5 sans-serif;
								margin-right: -.25em;
								padding: .75em 1.5em;
								position: relative;
								top: 1.25em;
							}
						</style>
						<div style="padding-top:30px">
							<ul>
								<li>
									<div class="text-center">
										<img src="images/rat/team.png" alt="Dresscode" class="img-responsive logo-qrcode js animate__animated">
										<div class="p-protokol js animate__animated">Gunakan Dresscode sesuai ketentuan</br>berupa Nuansa HITAM</div>
									</div>
								</li>
								<li>
									<div class="text-center">
										<img src="images/rat/tumbler.png" alt="Tumbler" class="img-responsive logo-qrcode js animate__animated">
										<div class="p-protokol js animate__animated">Wajib membawa Tumbler</br>atau botol minum pribadi</div>
									</div>
								</li>
								<li>
									<div class="text-center">
										<img src="images/rat/qr-scan.png" alt="QR Code" class="img-responsive logo-qrcode js animate__animated">
										<div class="p-protokol js animate__animated">Tunjukan QR Code</br>saat melakukan registrasi</div>
									</div>
								</li>
								<li>
									<div class="text-center">
										<img src="images/rat/gadget.png" alt="No Handphone" class="img-responsive logo-qrcode logo-jaga-jarak js animate__animated">
										<div class="p-protokol js animate__animated">Fokus selama</br>acara berlangsung</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6" style="width: 35% !important;background-image:url(images/denaya/bg_papper.png);padding-top: 3%;background-repeat: no-repeat;background-size: 80%;background-position: top;">
						<div class="row" style="padding-top: 5px;">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="display-t">
									<div class="display-tc">
										<img id="logo-pengantin" style="opacity: 1;" class="logo-pengantin sec-2 animate__animated animate__pulse animate__infinite infinite" src="./images/rat/SVG/logo_rat.svg" alt="Logo Naufal And Denaya" width="20%">
										<div class="hari-pernikahan" style="color: #7ac043;font-size:1.5em;line-height:0.5">Rapat Anggota Tahunan</div>
										<div class="nama-pengantin js animate__animated animate__fadeInUp" style="color: #7ac043;">Periode Tahun Buku 2024</div>
									</div>
								</div>
								<img src="images/denaya/separator.png" alt="denaya_separator" class="img-responsive flower denaya-separator js animate__animated animate__fadeInUp" style="padding-top:50px ;">
							</div>
						</div>
						<div class="nama-tamu" style="font-size: 2em;color: #7ac043;padding-top:5px">Selamat Datang</div>
						<div class="animate-box just-center">
							<div id="nama-tamu-undangan" class="nama-pengantin-foto" style="font-size:4em">Tamu Undangan</div>
							<!-- <img src="images/denaya/separator.png" alt="denaya_separator" class="img-responsive flower denaya-separator js animate__animated animate__fadeInUp"> -->
						</div>
						<div class="col-md-8 col-md-offset-2 text-center" style="padding-top: 5px;padding-bottom: 20px;">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-users"></i>
								</span>
								<div class="nama-tamu" style="font-size: 2em;">Estimasi Jumlah Hadir</div>
								<div class="nama-pengantin-foto" id="guest-count-icon" style="font-size: 4em;">0</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			window.addEventListener('load', function() {
				setInterval(function() {
					$.ajax({ //create an ajax request to display.php
						type: "GET",
						url: "./php/jumlahtamurealtime.php",
						dataType: "html", //expect html to be returned                
						success: function(response) {
							$("#guest-count-icon").text(response + "");
						}
					});

					$.ajax({
						method: "GET",
						url: "./php/namatamu.php",
						dataType: "html",
						success: function(response) {
							$("#nama-tamu-undangan").text(response);
						}
					});
				}, 2000);

			});

			// 2. This code loads the IFrame Player API code asynchronously.
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/player_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			// 3. This function creates an <iframe> (and YouTube player)
			//    after the API code downloads.
			var player;

			function onYouTubePlayerAPIReady() {
				player = new YT.Player('ytplayer', {
					width: '100%',
					height: '720px',
					videoId: 'nXph_hKjF_U',
					events: {
						'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange
					}
				});
			}

			// 4. The API will call this function when the video player is ready.
			function onPlayerReady(event) {
				event.target.playVideo();
				player.mute(); // comment out if you don't want the auto played video muted
			}

			// 5. The API calls this function when the player's state changes.
			//    The function indicates that when playing a video (state=1),
			//    the player should play for six seconds and then stop.
			function onPlayerStateChange(event) {
				if (event.data == YT.PlayerState.ENDED) {
					player.seekTo(0);
					player.playVideo();
				}
			}

			function stopVideo() {
				player.stopVideo();
			}
		</script>

		<!-- Footer start -->

		<!-- Footer end -->
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
	<script src="js/splide-extension-auto-scroll.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/splide-renderer.min.js"></script>
</body>

</html>