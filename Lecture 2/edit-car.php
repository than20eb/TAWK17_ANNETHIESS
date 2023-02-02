<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "ju_cars");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// prepare and bind
$stmt = $conn->prepare("SELECT * FROM cars WHERE id=?");
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();

$result = $stmt->get_result();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit car</title>
</head>

<body>
    <?php
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>{$row["make"]} {$row["model"]}</p>";
    }
    ?>
</body>

</html>