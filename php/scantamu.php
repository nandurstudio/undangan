<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php
include_once __DIR__ . '/header.php';
?>

<body>
	<script type="text/javascript" src="/js/html5-qrcode.min.js"></script>
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
							include_once __DIR__ . '/connection.php';
							$selectquery = (isset($_GET['last_id']) && ctype_digit($_GET['last_id'])) ? "SELECT * FROM tr_tamu WHERE tamuId = " . (int)
																						$_GET['last_id'] . " LIMIT 1" : "SELECT * FROM tr_tamu ORDER BY date DESC LIMIT 1";
							$reservasi = mysqli_query($conn, $selectquery);

							// Periksa apakah ada baris yang dikembalikan
							if ($row = $reservasi->fetch_assoc()) {
								$name_guest = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
								$adr_guest = htmlspecialchars($row['alamat'], ENT_QUOTES, 'UTF-8');

								// Pengecekan if null
								if (is_null($adr_guest)) {
									echo "<div class=\"nama-pengantin\" style=\"color:#8a6d5a;\">Selamat datang</div><h2 style=\"color:#8a6d5a;\">" . $name_guest . "</h2>";
								} else {
									echo "<div class=\"nama-pengantin\" style=\"color:#8a6d5a;\">Selamat datang</div><h2 style=\"color:#8a6d5a;\">" . $name_guest . "</h2><p style=\"color:#8a6d5a;\">Dari</p><h2 style=\"color:#8a6d5a;\">" . $adr_guest . "</h2>";
								}
								echo "<h1>Silakan Masuk</h1>";
							} else {
								// Handle ketika tidak ada baris yang dikembalikan
								echo "<div class=\"nama-pengantin\" style=\"color:#8a6d5a;\">Data tamu tidak ditemukan.</div>";
							}
							echo "<h1 id=\"jumlah-tamu-final\" hidden>1</h1>";
							?>
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
					<h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="animate-box just-center">
							<div class="nama-pengantin" style="color:#8a6d5a; font-size:3em" id="total-guest-came"><u>Total tamu</u></div>
							<div class="nama-pengantin" style="color:#8a6d5a; font-size:2em"><u>Terima Kasih</u></div>
							<p>Tekan tombol close untuk menutup informasi ini/informasi ini akan otomatis tertutup dalam <span id="countdown">5</span> detik.</p>
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
		<!-- Reservasi -->
		<div class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row">
							<div class="nama-pengantin-foto js animate__animated">Scan Tamu Undangan RAT Periode Tahun Buku 2025</div>
							<h3 style="color:#7ac043;" id="scan-inst"></h3>
							<div class="row animate-box">
								<div id="reader" width="400px"></div>
							</div>
							<script type="text/javascript">
						var html5QrcodeScanner = null;
								var html5QrcodeScanner = null;
						if (typeof html5QrCode === 'undefined') { window.html5QrCode = { stop: function(){ return Promise.resolve(); } }; }
						window.addEventListener('load', function() {
									$('#exampleModalCenter').modal('show');
						// remove last_id from URL after showing modal so reloads don't repeat it
						try {
							var _params = new URLSearchParams(window.location.search);
							if (_params.has('last_id')) {
								_params.delete('last_id');
								var _newSearch = _params.toString();
								history.replaceState(null, '', window.location.pathname + (_newSearch ? ('?' + _newSearch) : ''));
							}
						} catch(e) {
							/* ignore if URLSearchParams not supported */
						}
									var timeleft = 3;
									var downloadTimer = setInterval(function() {
										if (timeleft <= 0) {
											clearInterval(downloadTimer);
											// put your default event here
											$("#scan-inst").text('Silakan scan QR Invitation disini');
											html5QrcodeScanner = new Html5QrcodeScanner(
												"reader", {
													fps: 10,
													qrbox: {
														width: 250,
														height: 250
													}
												},
												/* verbose= */
												false);
											$('#exampleModalCenter').modal('hide');
											html5QrcodeScanner.render(onScanSuccess, onScanFailure);
										} else {
											$("#scan-inst").text('Menyiapkan scanner dalam ' + timeleft + " detik.");
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
										$("#jumlahtamu").val(1);
										document.forms[0].submit();
										html5QrcodeScanner.clear();
										// ^ this will stop the scanner (video feed) and clear the scan area.
									} else {
										console.log('Terpotong');
										$("#nama-tamu").val(decodedText.trim());
										$("#alamat").val('');
										$("#sesi").val('');
										$("#jumlahtamu").val('');
										document.forms[0].submit();
										html5QrcodeScanner.clear();
										// ^ this will stop the scanner (video feed) and clear the scan area.
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
									$("#total-guest-came").text('Tamu hanya 1 orang,');
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
									$("#total-guest-came").text('Total tamu 2 orang,');
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
									$("#total-guest-came").text('Total tamu 3 orang,');
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
									$("#total-guest-came").text('Total tamu 4 orang,');
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
									$("#total-guest-came").text('Total tamu 5 orang,');
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
									$("#total-guest-came").text('Total tamu 6 orang,');
								}

								function onScanFailure(error) {
									// handle scan failure, usually better to ignore and keep scanning.
									// for example:
									// console.warn('Code scan error = ${error}');
								}
							</script>
							</br>
							<form action="/php/scan_success.php" method="post" id="qr-result">
								<div class="row animate-box">
									<div class="col-md-12 col-md-offset-2">
										<div class="col-md-8 col-sm-4">
											<div class="form-group">
												<label for="nama-tamu" class="custom-label">Nama Pada Undangan</label>
												<input type="text" class="form-control" id="nama-tamu" name="nama-tamu" placeholder="Nama Pada Undangan" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="row animate-box">
									<div class="col-md-12 col-md-offset-2">
										<div class="col-md-8 col-sm-4">
											<div class="form-group">
												<label for="alamat" class="custom-label">Alamat</label>
												<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="row animate-box" hidden>
									<div class="col-md-12 col-md-offset-2">
										<div class="col-md-8 col-sm-4">
											<div class="form-group">
												<label for="sesi" class="custom-label">Sesi</label>
												<input type="text" class="form-control" id="sesi" name="sesi" placeholder="Sesi" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="row animate-box" hidden>
									<div class="col-md-12 col-md-offset-2">
										<div class="col-md-8 col-sm-4">
											<div class="form-group">
												<label for="sesi" class="custom-label">Jumlah Tamu</label>
												<input type="text" class="form-control" id="jumlahtamu" name="jumlahtamu" placeholder="0" readonly>
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
			include_once __DIR__ . '/footer.php';
			?>
			<!-- Footer end -->
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<!-- jQuery -->
		<script src="/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="/js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="/js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="/js/jquery.countTo.js"></script>

		<!-- Stellar -->
		<script src="/js/jquery.stellar.min.js"></script>
		<!-- Magnific Popup -->
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<script src="/js/magnific-popup-options.js"></script>

		<!-- Main -->
		<script src="/js/main.js"></script>
</body>

</html>