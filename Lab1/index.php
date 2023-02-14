<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lab1.css">
    <title>Task Overview</title>
</head>

<body>
<header>
    <h1>My Task</h1>
  </header>
    <div id="bodycontainer">
            <nav>
                <button class="newTaskPlusButton" onclick="addNewTask()"> + </button>
            </nav>
        <main>
            <?php
            include "connecttodatabase.php";
            // Get table data
            $sql = "SELECT id, title, description, status FROM tasks";
            $result = $conn->query($sql);

            // Get column names
            $tablecolumns = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'todo_application' AND TABLE_NAME = 'tasks'";
            $columns = $conn->query($tablecolumns);

            // Defining edit button
            $edit = "Edit";
            $conn->close();
            ?>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $checked = "";
                  if ($row["status"]==="1"){
                    $checked = "&#9989     ";
                  }
                  else{
                    $checked = "&#10062     ";
                  }
                  echo "<a href='edit-task.php?id={$row["id"]}'> 
                  <li class='edit-task-li'> 
                    {$checked} {$row ["title"]} 
                  </li> </a>"; 
                }
              } 
            ?>
            </ul>
            </table>
        </main>

        <!-----------------------------------Add New Task------------------------------------------------------------------------>
        <script type="text/javascript">
            function addNewTask() {
                console.log("add new task function");
                location.href = "new-task.php";
            }

            function editTask(id) {
                location.href = "http://localhost:8888/lab1/edit-task.php?id=" + id;
            }
        </script>
        <!-----------------------------------Animated Background------------------------------------------------------------------------>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.cells.min.js"></script>
        <script>
            VANTA.CELLS({
                el: "#bodycontainer",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 815.00,
                minWidth: 400.00,
                scale: 1.00,
                color1: 0xff008e,
                color2: 0xf2af35,
                size: 1.70,
                speed: 1.10
            })
        </script>
    </div>
</body>

</html>