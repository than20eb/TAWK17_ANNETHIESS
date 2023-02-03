<?php

// Connect to DB
// Create connection
$conn = new mysqli("localhost", "todo_application", "", "tasks");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get post data
$id = $_POST["id"];
$make = $_POST["make"];
$model = $_POST["model"];

// Send post data to DB
$query = "UPDATE tasks SET make = ?, model = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssi", $make, $model, $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
} 