<!-------------------------------------------CREATE CONNECTION TO DATABASE AND FETCH TASK DATA---------------------------------------------->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_application";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
?>

<!-------------------------------------------INDEX HTML---------------------------------------------------->
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
  <div id="bodycontainer">
  <div class="Task-container">
    <h1>My Weekly Tasks</h1>
    <nav>
        <button class="newTaskButton" onclick="addNewTask()">+</button>
    </nav>
</div>

    <div class="main">
      <?php
      $sql = "SELECT * FROM tasks";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<p>Task Nr " . $row["id"] . "</p>";
          echo "<p> title: " . $row["title"] . " description: " . $row["description"] . "</p>";
        }
      } else {
        echo "0 to dos results";
      }
      mysqli_close($conn);
      ?>
    </ul>
      <?php include 'new-task.php'; ?>
      </table>
</div>

<script type="text/javascript">
    function addNewTask() {
        console.log("add new task function");
        location.href = "new-task.php";
    }

    function editTask(id) {
        location.href = "http://localhost:8888/lab1/edit-task.php?id=" + id;
    }
</script>

<!-------------------------------------------ANIMATED BACKGROUND---------------------------------------------------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.cells.min.js"></script>
<script>
VANTA.CELLS({
  el: '#bodycontainer',
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  color1: 0xff008e,
  color2: 0xf2af35,
  size: 2.70,
  speed: 0.60
})
</script>
</div>
</body>
</html>
