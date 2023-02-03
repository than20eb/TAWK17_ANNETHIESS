<?php

// Create connection to Database
$conn = new mysqli("localhost", "todo_application", "", "tasks");

// Check up: If connection to Database is missing
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data for tasks
$id = $_POST["id"];


// Send changes in data to databank to store there
$query = "DELETE FROM tasks WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
//Problems connection to database and safing there
else{
    echo "Error";
}