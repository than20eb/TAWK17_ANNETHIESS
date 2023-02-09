<?php

require_once __DIR__ . "/database.php";

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