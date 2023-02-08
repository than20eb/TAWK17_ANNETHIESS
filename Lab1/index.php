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
</body>

</html>