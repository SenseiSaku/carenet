<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Get the user name from POST data
     $name = $_POST['name'];

     // Simulate inserting into database (you can replace this with actual database code)
     // For example, using PDO to insert into a database

     // Respond with success message
     echo json_encode(['status' => 'User Created']);
} else {
     echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
