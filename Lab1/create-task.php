<?php
include "connecttodatabase.php";

// Get data: tasks from table
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
 
<?php
    // Get table data
    $sql = "SELECT id, title, description, status FROM tasks";
    $result = $conn->query($sql);

    $title = $_POST["title"];
    $description = $_POST["description"];
    $status = $_POST["status"];

    $sql = "INSERT INTO tasks (id, title, description, status) VALUES (NULL, '$title', '$description', '$status')";

    //Bring User back to Index.php
    if ($conn->query($sql) === TRUE) {
        header("Location:index.php");
    } else {
        echo "<br> Error: " . $sql . "<br>" . $conn->error;
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
