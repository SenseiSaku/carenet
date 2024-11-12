<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
     // Parse the PUT request body
     parse_str(file_get_contents("php://input"), $putData);
     $userId = $putData['id'];
     $newName = $putData['name'];

     // Simulate updating user in the database (replace with real DB logic)

     echo json_encode(['status' => 'User Updated']);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
