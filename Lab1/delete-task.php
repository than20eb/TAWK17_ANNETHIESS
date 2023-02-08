<?php
include "connecttodatabase.php";

// Get tasks from databank
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