<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     $api = "https://jsonplaceholder.typicode.com/users";
     $users = json_decode(file_get_contents($api), true);

     echo json_encode(['status' => 'success', 'data' => $users]);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
