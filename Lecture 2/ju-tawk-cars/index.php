<?php // http://localhost/ju-tawk-cars

require_once __DIR__ . "/database.php";

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Cars</h1>

    <ul>

        <?php
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li>  <a href='edit-car.php?id={$row["id"]}'>{$row["make"]} {$row["model"]}</a></li>";
        }
        ?>

    </ul>

    <a href="new-car.php">New car</a>
</body>

</html>