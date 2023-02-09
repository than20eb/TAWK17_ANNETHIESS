

<?php

if($_SERVER["REQUEST_METHOD"] != "GET"){
    die("Request method invalid");
}

require_once __DIR__ . "/database.php";

$query = "SELECT * FROM books";

// $result = mysqli_query($conn, $query) or die("Select failed");
// $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

$result = $conn->query($query) or die("Select failed");
$books = $result->fetch_all(MYSQLI_ASSOC);

header("Content-Type: application/json");
echo json_encode($books);