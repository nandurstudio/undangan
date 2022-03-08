<?php
include "./php/connection.php";
$name = $_POST["name"];

mysqli_query($conn, "SELECT * FROM tbl_auditor");
mysqli_query($conn, "INSERT INTO `tbl_auditor` (`date`, `adtr_name`, `adtr_sname`, `adtr_dept`, `adtr_sign`, `ID`) VALUES ('$date','$name','$sname','$dept','$sign', NULL);");

header("Location:/shpplantonline/php/auditor_data.php");
?>