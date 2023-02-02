<?php

// Connect to DB
// Create connection
$conn = new mysqli("localhost", "root", "", "ju_cars");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get post data
$id = $_POST["id"];


// Send post data to DB
$query = "DELETE FROM cars WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
}