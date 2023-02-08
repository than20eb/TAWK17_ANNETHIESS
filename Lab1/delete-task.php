<?php
include "connecttodatabase.php";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_application";
$title = $_POST["title"];
$description = $_POST["description"];
$status = $_POST["status"];

$sql = "DELETE FROM tasks WHERE ID='" . $_GET['id'] . "'";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error deleting record: " . $conn -> error;
}
$conn->close();
?>

<script type="text/javascript">
    function validateForm() {
        let x = document.forms["taskForm"]["title"].value;
        if (x == "") {
            alert("Title must be filled out");
            return false;
        }
        let y = document.forms["taskForm"]["description"].value;
        if (y == "") {
            alert("You must add a description");
            return false;
        }
        let z = document.forms["taskForm"]["status"].value;
        if (z != "1" && z != "0") {
            alert("Status can only be 0 or 1");
            return false;
        }
    }
</script>