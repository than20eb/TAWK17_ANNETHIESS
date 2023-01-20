<?php

$servername = "localhost";
$username = "root";
$password = "root";



// Create connection
$conn = new mysqli($servername, $username, $password);



// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="lab1.js"></script>
    <link rel="stylesheet" href="lab1.css">
    <title>Lab1</title>+
</head>
<body>
<div class="grid-container">
  <div class="grid-item">1</div>
  <div class="grid-item">2</div>
  <div class="grid-item">3</div>
  <div class="grid-item">4</div>
  <div class="grid-item">5</div>
  <div class="grid-item">6</div>
  <div class="grid-item">7</div>
  <div class="grid-item">8</div>
  <div class="grid-item">9</div>
</div>
    <h1>Lab Assignment 1</h1>
</body>
</html>