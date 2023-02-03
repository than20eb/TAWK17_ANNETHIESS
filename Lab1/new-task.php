<?php include 'connecttodatabase'?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Task</title>
    <link rel="stylesheet" href="lab1.css">
</head>

<body>
    <div class="create-task-container">
        <h2>Create a new task</h2>

        <form action="create-task.php" method="post">
            <p>Task:</p> <input type="text" name="title" value=""> <br>

            <p>Description:</p> <input type="text" name="description" value=""> <br>

            <input type="submit" value="Save">
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>