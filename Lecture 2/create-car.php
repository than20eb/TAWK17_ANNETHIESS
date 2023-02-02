<?php

// Connect to DB
// Create connection
$conn = new mysqli("localhost", "root", "", "ju_cars");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get post data
$make = $_POST["make"];
$model = $_POST["model"];

// Send post data to DB
$query = "INSERT INTO cars (make, model) VALUES (?, ?)"; // Create the query (command) for the database
$stmt = $conn->prepare($query); // Prepare the query for execution
$stmt->bind_param("ss", $make, $model); // Add values to query

$success = $stmt->execute(); // Execute command / query

// Redirect user to index.php
if($success){
    header("location: index.php");
}
else{
    echo "Error";
}