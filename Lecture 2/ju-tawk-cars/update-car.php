<?php

require_once __DIR__ . "/database.php";

// Get post data
$id = $_POST["id"];
$make = $_POST["make"];
$model = $_POST["model"];


// Send post data to DB
$query = "UPDATE cars SET make = ?, model = ? WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssi", $make, $model, $id);

$success = $stmt->execute();

if($success){
    header("location: index.php");
}
else{
    echo "Error";
}