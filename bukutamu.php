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
		<!-- Reservasi -->
		<div class="bg-carton">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row">
							<div class="nama-pengantin-foto js animate__animated">Buku Tamu Undangan Pandawa Awards 2023</div>
							<table id="data" class="display" style="width:100%; background-color:white;">
							</table>
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
		<script src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var table = $('#data').DataTable({
					responsive: true,
					"ajax": {
						"type": "POST",
						"url": "./php/daftarbukutamu.php",
						"timeout": 120000,
						"dataSrc": function(json) {
							if (json != null) {
								return json
							} else {
								return "";
							}
						}
					},
					"sAjaxDataProp": "",
					"width": "100%",
					"order": [
						[0, "asc"]
					],
					"aoColumns": [{
							"mData": null,
							"title": "No",
							render: function(data, type, row, meta) {
								return meta.row + meta.settings._iDisplayStart + 1;
							}
						},
						{
							"mData": null,
							"title": "Nama Tamu",
							"render": function(data, row, type, meta) {
								return data.name;
							}
						},
						{
							"mData": null,
							"title": "Alamat",
							"render": function(data, row, type, meta) {
								return data.alamat;
							}
						},
						{
							"mData": null,
							"title": "Sesi",
							"render": function(data, row, type, meta) {
								return data.sesi;
							}
						},
						{
							"mData": null,
							"title": "Jumlah Tamu",
							"render": function(data, row, type, meta) {
								return data.jumlah_tamu;
							}
						},
						{
							"mData": null,
							"title": "Waktu Datang",
							"render": function(data, row, type, meta) {
								return data.date;
							}
						}
					]
				});

			});
		</script>
</body>

</html>