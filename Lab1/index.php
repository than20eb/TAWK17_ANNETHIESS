<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lab1.css">
    <title>Document</title>
</head>

<body>
  <div id="bodycontainer" >
    <header>
        <h1>Tasks</h1>
    </header>
    <nav>
        <button class="newTaskButton" onclick="addNewTask()">+</button>
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


        <table class="tableContainer">

            <tr>

                <!-- <?php
                        // Display column names
                        // foreach ($columns as $column) {
                        //     echo ("<th class='tableHeader'>");
                        //     echo ($column["COLUMN_NAME"] . " ");
                        //     echo ("</th>");
                        // }
                        ?> -->
                <th class='tableHeader'>Title</th>
                <th class='tableHeader tableDescription'>Description</th>
                <th class='tableHeader'>Status</th>
                <th></th>

            </tr>

            <?php
            // Display tasks in rows
            foreach ($result as $task) {
                echo ("<tr>");
                echo ("<td class='tableItem'>{$task["title"]}</td>");
                echo ("<td class='tableItem'>{$task["description"]}</td>");
                echo ("<td class='tableItem'>{$task["status"]}</td>");
                // foreach ($task as $taskColumn) {
                //     echo ("<td class='tableItem'>{$taskColumn}</td>");
                // }
                echo ("<td class='tableItem'><button class='tableButton' onclick='editTask(" . $task['id'] . ")'>{$edit}</button></td></tr>");
            }
            ?>

        </table>

    </main>

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
  minHeight: 200.00,
  minWidth: 200.00,
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