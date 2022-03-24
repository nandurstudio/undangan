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
	<script type="text/javascript" src="js/html5-qrcode.min.js"></script>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Check in!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="animate-box just-center">
							<?php
							include './php/connection.php';
							$selectquery = "SELECT * FROM tr_tamu ORDER BY tamuId DESC LIMIT 1";
							$reservasi = mysqli_query($conn, $selectquery);
							$row = $reservasi->fetch_assoc();
							$id_guest = $row['tamuId'];
							$name_guest = $row['name'];
							$adr_guest = $row['alamat'];
							$sesi_guest = $row['sesi'];
							$total_guest = $row['jumlah_tamu'];
							if ($adr_guest == "") {
								echo "<h1><u>Welcome</u></h1><h2>" . $name_guest . "</h2>";
							} else {
								echo "<h1><u>Welcome</u></h1><h2>" . $name_guest . "</h2>From<h2>" . $adr_guest . "</h2>";
							}
							echo "<p>How many guests came?</p>"
							?>
							<div class="row animate-box">
								<div class="col-md-12 col-md-offset-3">
									<div class="col-md-6 col-sm-4">
										<button type="button" name="submit1" value="submit1" id="submit-1" class="btn btn-primary" onclick="return clickButton1();">1</button>
										<button type="button" name="submit2" value="submit2" id="submit-2" class="btn btn-primary" onclick="return clickButton2();">2</button>
										<button type="button" name="submit3" value="submit3" id="submit-3" class="btn btn-primary" onclick="return clickButton3();">3</button>
									</div>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12 col-md-offset-3">
									<div class="col-md-6 col-sm-4">
										<button type="button" name="submit4" value="submit4" id="submit-4" class="btn btn-primary" onclick="return clickButton4();">4</button>
										<button type="button" name="submit5" value="submit5" id="submit-5" class="btn btn-primary" onclick="return clickButton5();">5</button>
										<button type="button" name="submit6" value="submit6" id="submit-6" class="btn btn-primary" onclick="return clickButton6();">6</button>
									</div>
								</div>
							</div>
							<h1 id="jumlah-tamu-final">0</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal-ty" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Confirmation!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="animate-box just-center">
							<h1 id="total-guest-came"><u>Total guest</u></h1>
							<p>Press the close button to close this information/this information will be closed automatically after <span id="countdown">5</span> seconds.</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="fh5co-loader"></div>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="#">Wedding<strong>.</strong></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="./listtamu.php">Guest List</a></li>
							<li class="active">
								<a href="./scantamu.php">Scan QR Code</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Hello!</h2>
						<h3 id="scan-inst"></h3>
						<div class="row animate-box">
							<div id="reader" width="400px"></div>
						</div>
						<script type="text/javascript">
							window.addEventListener('load', function() {
								$('#exampleModalCenter').modal('show');
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#scan-inst").text('Please scan your QR Invitation here');
										let html5QrcodeScanner = new Html5QrcodeScanner(
											"reader", {
												fps: 10,
												qrbox: {
													width: 250,
													height: 250
												}
											},
											/* verbose= */
											false);
										html5QrcodeScanner.render(onScanSuccess, onScanFailure);
									} else {
										$("#scan-inst").text('Preparing scanner in ' + timeleft + " seconds.");
									}
									timeleft -= 1;
								}, 1000);
							})

							function onScanSuccess(decodedText, decodedResult) {
								// handle the scanned code as you like, for example:
								console.log('Code matched = ${decodedText}', decodedResult);

								var string_ori = decodedText;
								var string1 = decodedText;
								if (decodedText.indexOf("From") >= 0) {
									console.log('Tidak terpotong');
									string1 = string1.split('From ')[1];
									string2 = string1.split('Sesi ')[1];
									string3 = string1.split('Sesi ')[1];
									string_ori = string_ori.split(' From')[0];

									var remove_after_sesi = string1.indexOf(' Sesi');
									var remove_after_from = string1.indexOf(' From');
									var result_nama = string1.substring(0, remove_after_from);
									var result_alamat = string1.substring(0, remove_after_sesi);

									console.log(string_ori);
									console.log(result_alamat);
									console.log(string3);

									$("#nama-tamu").val(string_ori);
									$("#alamat").val(result_alamat);
									$("#sesi").val(string3);
									document.forms[0].submit();
								} else {
									console.log('Terpotong');
									$("#nama-tamu").val(decodedText.trim());
									$("#alamat").val('');
									$("#sesi").val('');
									document.forms[0].submit();
								}

								html5QrCode.stop().then((ignore) => {
									// QR Code scanning is stopped.
									console.log('scan stop')
								}).catch((err) => {
									// Stop failed, handle it.
								});
							}

							function clickButton1() {
								$('#jumlah-tamu-final').text('1');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guest is only you, Thank You!');
							}

							function clickButton2() {
								$('#jumlah-tamu-final').text('2');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guests are 2, Thank You!');
							}

							function clickButton3() {
								$('#jumlah-tamu-final').text('3');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guests are 3, Thank You!');
							}

							function clickButton4() {
								$('#jumlah-tamu-final').text('4');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guests are 4 Thank You!');
							}

							function clickButton5() {
								$('#jumlah-tamu-final').text('5');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guests are 5, Thank You!');
							}

							function clickButton6() {
								$('#jumlah-tamu-final').text('6');
								$.ajax({
										method: "POST",
										url: "jumlahtamu.php",
										data: {
											text: $("#jumlah-tamu-final").text()
										}
									})
									.done(function(response) {
										$("#jumlah-tamu-final").html(response);
									});
								$("#exampleModalCenter").modal("hide");
								$("#modal-ty").modal("show");
								var timeleft = 5;
								var downloadTimer = setInterval(function() {
									if (timeleft <= 0) {
										clearInterval(downloadTimer);
										// put your default event here
										$("#modal-ty").modal('hide');
									} else {
										document.getElementById("countdown").innerHTML = timeleft;
									}
									timeleft -= 1;
								}, 1000);
								$("#total-guest-came").text('Total guests are 6, Thank You!');
							}

							function onScanFailure(error) {
								// handle scan failure, usually better to ignore and keep scanning.
								// for example:
								// console.warn('Code scan error = ${error}');
							}
						</script>
						</br>
						<form action="./php/scan_success.php" method="post" id="qr-result">
							<div class="row animate-box">
								<div class="col-md-12 col-md-offset-2">
									<div class="col-md-8 col-sm-4">
										<div class="form-group">
											<label for="name" class="custom-label">Name</label>
											<input type="text" class="form-control" id="nama-tamu" name="nama-tamu" placeholder="Nama" value="">
										</div>
									</div>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12 col-md-offset-2">
									<div class="col-md-8 col-sm-4">
										<div class="form-group">
											<label for="alamat" class="custom-label">From</label>
											<input type="text" class="form-control" id="alamat" name="alamat" placeholder="From">
										</div>
									</div>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12 col-md-offset-2">
									<div class="col-md-8 col-sm-4">
										<div class="form-group">
											<label for="sesi" class="custom-label">Sesi</label>
											<input type="text" class="form-control" id="sesi" name="sesi" placeholder="Sesi">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer start -->
		<?php
		include "./php/footer.php";
		?>
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
</body>

</html>