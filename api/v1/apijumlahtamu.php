<?php
// Connect to database
include('koneksi.php');
$db = new dbObj();
$connection = $db->getConnstring();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        // Retrive Products
        if (!empty($_GET['tamuId'])) {
            $id = intval($_GET['tamuId']);
            get_employees($id);
        } else {
            get_employees();
        }
        break;

    case 'POST':
        // Insert Product
        insert_employee();
        break;

    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
function get_employees($id = 0)
{
    global $connection;
    $query = "SELECT * FROM tr_tamu";
    if ($id != 0) {
        $query .= " WHERE tamuId=" . $id . " LIMIT 1";
    }
    $response = array();
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

function insert_employee()
{
    global $connection;
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($_GET['name']) && isset($_GET['alamat']) && isset($_GET['sesi']) && isset($_GET['jumlah_tamu'])) {
        // $name = $data["name"];
        // $alamat = $data["alamat"];
        // $sesi = $data["sesi"];
        // $jumlah_tamu = $data["jumlah_tamu"];
        $query = "INSERT INTO `tr_tamu` (`tamuId`, `name`, `alamat`, `sesi`, `jumlah_tamu`, `date`) VALUES (NULL, 'NN', 'NN', '1', '1', current_timestamp());";
        if (mysqli_query($connection, $query)) {
            $response = array(
                'status' => 1,
                'status_message' => 'Tamu Added Successfully.'
            );
        } else {
            $response = array(
                'status' => 0,
                'status_message' => 'Tamu Addition Failed.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    };
}
