<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Database connection (reuse existing connection)
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['query'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing query parameter']);
    exit;
}

$query = $data['query'];

try {
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        throw new Exception(mysqli_error($conn));
    }
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'data' => $rows,
        'count' => count($rows)
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Query error: ' . $e->getMessage()
    ]);
}

mysqli_close($conn);
?>
