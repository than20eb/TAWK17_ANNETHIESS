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
$title = $_POST ["title"];
$description = $_POST["description"];
$status = $_POST["status"];

// Send post data to DB
$query = "UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssi", $title, $description, $status, $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
} 