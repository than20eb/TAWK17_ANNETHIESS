<?php
// Create connection to Database
$conn = new mysqli("localhost", "todo_application", "", "tasks");
// Check up: If connection to Database is missing
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
    