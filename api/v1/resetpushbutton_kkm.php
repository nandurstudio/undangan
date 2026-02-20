<?php
// Connect to database
include('koneksi.php');
$db = new dbObj();
$connection = $db->getConnstring();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
     case 'POST':
          // Insert Product
          reset_status_pushbutton();
          break;

     default:
          // Invalid Request Method
          header("HTTP/1.0 405 Method Not Allowed");
          break;
}

function reset_status_pushbutton()
{
     global $connection;
     $query = "UPDATE m_parameter set txtParameterValue = 'false' WHERE txtParameterName = 'PUSH_KKM';";
     if (mysqli_query($connection, $query)) {
          $response = array(
               'status' => 1,
               'status_message' => 'Update Push Button Success'
          );
     } else {
          $response = array(
               'status' => 0,
               'status_message' => 'Update Push Button Failed'
          );
     }
     header('Content-Type: application/json');
     echo json_encode($response);
}
