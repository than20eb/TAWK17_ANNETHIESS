<?php
require_once __DIR__ . "/connecttodatabase.php";

// Get table data
$sql = "SELECT id, title, description, status FROM tasks";
$result = $conn->query($sql);


// Get data: tasks from table
$title = $_POST["title"];
$description = $_POST["description"];
$status = $_POST["status"];

// Send post data to DB
$query = "INSERT INTO tasks (title, description) VALUES (?, ?)"; // Create the query (command) for the database
$stmt = $conn->prepare($query); // Prepare the query for execution
$stmt->bind_param("ss", $title, $description); // Add values to query

$success = $stmt->execute(); // Execute command / query

// Redirect user to index.php

if($success){
    header("location: index.php");
}
else{
    echo "Error";
}
?>

<script type="text/javascript">
        function addNewTask() {
            console.log("add new task function");
            location.href = "new-task.php";
        }

        function editTask(id) {
            location.href = "http://localhost:8888/lab1/edit-task.php?id=" + id;
        }
    </script>
