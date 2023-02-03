<?php
include 'connecttodatabase';


// Get data: tasks
$title = $_POST["title"];
$description = $_POST["description"];

// Send post data to DB
$query = "INSERT INTO tasks (task, description) VALUES (?, ?)"; // Create the query (command) for the database
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
?>