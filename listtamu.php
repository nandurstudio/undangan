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
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="#">Wedding<strong>.</strong></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="./listtamu.php">Guest List</a></li>
							<li>
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
					<div class="col-md-8 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>Hello!</h2>
						<h3>Guest list</h3>
						<div class="row animate-box">
							<?php
							// Attempt select query execution
							include './php/connection.php';
							$sql = "SELECT * FROM `tr_reservasi` ORDER BY `name` ASC";
							if ($result = mysqli_query($conn, $sql)) {
								if (mysqli_num_rows($result) > 0) {
									$i = 1;
									echo "<table class=\"styled-table\" id=\"data\">";
									echo "<tr>";
									echo "<th>ID</th>";
									echo "<th onclick=\"sortTable(0)\">Name</th>";
									echo "<th>Address</th>";
									echo "<th>Attending</th>";
									echo "<th>Guests</th>";
									echo "<th>Session</th>";
									echo "<th onclick=\"sortTable(1)\">Date</th>";
									echo "</tr>";
									while ($row = mysqli_fetch_array($result)) {
										echo "<tr>";
										echo "<td>" . $i . "</td>";
										echo "<td>" . $row['name'] . "</td>";
										echo "<td>" . $row['alamat'] . "</td>";
										echo "<td>" . $row['attending'] . "</td>";
										echo "<td>" . $row['jumlah_tamu'] . "</td>";
										echo "<td>" . $row['sesi'] . "</td>";
										echo "<td>" . $row['date'] . "</td>";
										echo "</tr>";
										$i = $i + 1;
									}
									echo "</table>";
									// Free result set
									mysqli_free_result($result);
								} else {
									echo "Database kosong.";
								}
							} else {
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}

							// Close connection
							mysqli_close($conn); ?>
						</div>
						<script type="text/javascript">
							function sortTable(n) {
								var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
								table = document.getElementById("data");
								switching = true;
								// Set the sorting direction to ascending:
								dir = "asc";
								/* Make a loop that will continue until
								no switching has been done: */
								while (switching) {
									// Start by saying: no switching is done:
									switching = false;
									rows = table.rows;
									/* Loop through all table rows (except the
									first, which contains table headers): */
									for (i = 1; i < (rows.length - 1); i++) {
										// Start by saying there should be no switching:
										shouldSwitch = false;
										/* Get the two elements you want to compare,
										one from current row and one from the next: */
										x = rows[i].getElementsByTagName("TD")[n];
										y = rows[i + 1].getElementsByTagName("TD")[n];
										/* Check if the two rows should switch place,
										based on the direction, asc or desc: */
										if (dir == "asc") {
											if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
												// If so, mark as a switch and break the loop:
												shouldSwitch = true;
												break;
											}
										} else if (dir == "desc") {
											if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
												// If so, mark as a switch and break the loop:
												shouldSwitch = true;
												break;
											}
										}
									}
									if (shouldSwitch) {
										/* If a switch has been marked, make the switch
										and mark that a switch has been done: */
										rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
										switching = true;
										// Each time a switch is done, increase this count by 1:
										switchcount++;
									} else {
										/* If no switching has been done AND the direction is "asc",
										set the direction to "desc" and run the while loop again. */
										if (switchcount == 0 && dir == "asc") {
											dir = "desc";
											switching = true;
										}
									}
								}
							}
						</script>
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