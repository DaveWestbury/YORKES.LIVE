<?php
header('Content-Type: application/json');

// Optional: enable database check
$checkDatabase = false;

$response = ['status' => 'ok'];

if ($checkDatabase) {
    $mysqli = new mysqli('localhost', 'your_user', 'your_pass', 'your_db');

    if ($mysqli->connect_error) {
        http_response_code(500);
        $response['status'] = 'error';
        $response['error'] = 'DB connection failed';
    }

    $mysqli->close();
}

echo json_encode($response);
?>
