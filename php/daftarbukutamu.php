<?php
    include 'connection.php';
    $i = 1;
    $query = "SELECT * FROM `tr_tamu` ORDER BY `tamuId` DESC";
    $dewan1 = $db1->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    while ($row = $res1->fetch_assoc()) {
        $data[$i]['tamuId'] = $row['tamuId'];
        $data[$i]['name'] = $row['name'];
        $data[$i]['alamat'] = $row['alamat'];
        $data[$i]['sesi'] = $row['sesi'];
        $data[$i]['jumlah_tamu'] = $row['jumlah_tamu'];
        $data[$i]['date'] = $row['date'];

        $i++;
	} 

    $out = array_values($data);
    echo json_encode($out);
    // Close connection
    mysqli_close($conn);
