<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php
include "header.php";
?>

<body style="overflow: hidden auto;">
	<section>
		<!-- Reservasi -->
		<div id="fh5co-couple" class="bg-carton vh150">
			<div class="container">
				<div class="col-md-12 js animate__animated">
					<div class="row">
						<div class="nama-pengantin-foto js animate__animated">Buku Tamu Undangan RAT Periode Tahun Buku 2025</div>
					</div>
					<div class="table-container"> <!-- Tambahkan container baru untuk memuat tabel -->
						<table id="example" class="display" style="width: 100%;">
							<thead>
								<tr>
									<th style="text-align: center;">No</th>
									<th style="text-align: center;">Nama</th>
									<th style="text-align: center;">Dept</th>
									<th style="text-align: center;">Waktu Datang</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer start -->
		<?php
		include "footer.php";
		?>
		<!-- Footer end -->
	</section>

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
	<script src="js/jquery.timeago.js"></script>
	<script src="node_modules/clipboard/dist/clipboard.min.js"></script>
	<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example').DataTable({
				responsive: true,
				ajax: {
					type: "POST",
					url: "./php/daftarbukutamu.php",
					timeout: 120000,
					dataSrc: function(json) {
						return json || [];
					}
				},
				columns: [{
						title: "No",
						render: function(data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
					{
						title: "Nama",
						data: "name"
					},
					{
						title: "Dept",
						data: "alamat"
					},
					{
						title: "Waktu Datang",
						data: "date"
					}
				],
				order: [
					[3, "desc"]
				],
				columnDefs: [{
						targets: [1, 3],
						className: 'dt-left'
					} // Mengatur penataan teks kiri untuk kolom "Nama Tamu" (index 1)
				]
			});

			// Fungsi untuk memuat ulang data DataTable setiap 1 menit
			function refreshData() {
				table.ajax.reload(null, false); // Gunakan 'false' untuk memuat data tanpa mengubah urutan atau paging
			}

			// Panggil fungsi refreshData setiap 1 menit
			setInterval(refreshData, 3000); // 3000 milidetik = 1 menit
		});
	</script>
</body>

</html>