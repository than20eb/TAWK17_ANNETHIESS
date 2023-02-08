<?php
// Create connection to Database
$conn = new mysqli("localhost", "todo_application", "", "tasks");
// Check up: If connection to Database is missing
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

// Get data: tasks
$title = $_POST["title"];
$description = $_POST["description"];

// Send post data to databank
$query = "INSERT INTO tasks (task, description) VALUES (?, ?)"; // Create the query (command) for the database
$stmt = $conn->prepare($query); // Prepare the query for execution
$stmt->bind_param("ss", $title, $description); // Add tasks values to database list query
$success = $stmt->execute(); // Execute command / query


// If succesfully safed, redirect user to index.php
if($success){
    header("location: index.php");
}
else{
    echo "Error saving the task";
}
