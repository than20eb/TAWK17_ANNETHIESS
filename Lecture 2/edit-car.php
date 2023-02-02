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

$car = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit car</title>

    <script src="script.js"></script>
</head>

<body>
    <h1>My car</h1>

    <form action="update-car.php" method="post">
        <p>
            <b>Make: </b>
            <input type="text" name="make" value="<?= $car["make"] ?>">
        </p>

        <p>
            <b>Model: </b>
            <input type="text" name="model" value="<?= $car["model"] ?>">
        </p>

        <input type="hidden" name="id" value="<?= $car["id"] ?>">
        <input type="submit" value="Update car">
    </form>



    <form action="delete-car.php" method="post">
        <input type="hidden" name="id" value="<?= $car["id"] ?>">
        <input type="submit" value="Delete car">
    </form>

</body>

</html>