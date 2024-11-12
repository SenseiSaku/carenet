<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
     // Parse the DELETE request body
     parse_str(file_get_contents("php://input"), $deleteData);
     $userId = $deleteData['id'];

     // Simulate deleting user from the database (replace with real DB logic)

     echo json_encode(['status' => 'User Deleted']);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
