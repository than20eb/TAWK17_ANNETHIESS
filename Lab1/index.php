<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_application";

// Create connection to database 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="lab1.js"></script>
  <link rel="stylesheet" href="lab1.css">
  <title>Lab1</title>
</head>

<body>
  <h1>Lab Assignment 1</h1>

 <?php
if ($result -> num_rows > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"];
    echo "<p> title: ". $row["title"]. " description: ". $row["description"]. "</p>";
  }
} else {
  echo "0 to dos results";
}

mysqli_close($conn);
 ?>
</body>

</html>