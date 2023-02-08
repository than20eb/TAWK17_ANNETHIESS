<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Edit Task</h1>
    </header>
    <nav>
        <button class="newTaskButton" onclick="addNewTask()">Back</button>
    </nav>
    <main>
        <div class="divContainer">

        
            <?php
            include "connecttodatabase.php";

            $sql = "SELECT title, description, status FROM tasks WHERE ID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $_GET["id"]);
            $stmt->execute();
            $result = $stmt->get_result();
            $field = $result->fetch_assoc();
            $conn->close();
            ?>

            <?php

            echo ("<form name='updateForm' action='update-task.php?id=" . $_GET['id'] . "' onsubmit='return validateForm()' method='post'>");
            ?>
            <label for="title">Title:</label>
            <?php
            echo ("<input id='title' type='text' name='title' value='{$field['title']}'><br>");
            ?>
            <label for="description">Description:</label>
            <?php
            echo ("<input id='description' type='text' name='description' value='{$field['description']}'><br>");
            ?>
            <label for="status">Status:</label>
            <?php
            echo ("<input id='status' type='text' name='status' value='{$field['status']}'><br>");
            ?>
            <input type="submit" value="Update" class="submitButton">
            </form>
            <?php
            echo ("<form name='deleteForm' action='delete-task.php?id=" . $_GET['id'] . "' method='post'>");
            echo ("<input type='hidden' name='title' value='{$field['title']}'>");
            echo ("<input type='hidden' name='description' value='{$field['description']}'>");
            echo ("<input type='hidden' name='status' value='{$field['status']}'>");
            ?>
            <input type="submit" value="Delete" class="submitButton">
            </form>
        </div>
    </main>
    <script type="text/javascript">
        function validateForm() {
            let x = document.forms["updateForm"]["title"].value;
            if (x == "") {
                alert("Title must be filled out");
                return false;
            }
            let y = document.forms["updateForm"]["description"].value;
            if (y == "") {
                alert("You must add a description");
                return false;
            }
            let z = document.forms["updateForm"]["status"].value;
            if (z != "1" && z != "0") {
                alert("Status can only be 0 or 1");
                return false;
            }
        }

        function addNewTask() {
            console.log("add new task function");
            location.href = "index.php";
        }
    </script>
</body>

</html>
