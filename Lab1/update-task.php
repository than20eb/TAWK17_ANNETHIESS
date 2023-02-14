<?php
require_once __DIR__ . "/connecttodatabase.php";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_application";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = $_POST["title"];
$description = $_POST["description"];
$status = $_POST["status"];

// $sql = "UPDATE tasks SET title='$title', description='$description', status='$status' WHERE ID='" . $_GET['id'] . "'";
$sql = "UPDATE tasks SET title=?, description=?, status=? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $title, $description, $status, $id);
$success = $stmt->execute();


if ($success){
    header ("location: index.php");
}
else{
    echo "error";
}
// if ($stmt->execute() === TRUE) {
//     header("Location:index.php");
// } else {
//     echo "Error updating record: " . $conn->error;
// }
// $conn->close();
?>





 <!--- User informed ----->
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
