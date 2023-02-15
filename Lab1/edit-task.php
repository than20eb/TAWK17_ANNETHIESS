<?php
require_once __DIR__ . "/connecttodatabase.php";
// prepare and bind
$stmt = $conn->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();

$result = $stmt->get_result();
$task = $result->fetch_assoc();
?>
<!--------------------------------------------------------HTML --->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="lab1.css">
</head>

<body>
    <h1>Edit Task</h1>
    <div id="bodycontainer">
        <div class="edit-tasks">
            <form action="update-task.php" method="post">
                <div>
                    <b>Title: </b>
                    <input type="text" name="title" class="inputfieldedittask" value="<?= $task["title"] ?>"> <!---Fills in Task Name in Input ´Field ---->
                </div>

                <div>
                    <b>Description: </b>
                    <input type="text" name="description" class="inputfieldedittask" value="<?= $task["description"] ?>"> <!---Fills in Task Name in Input ´Field ---->
                </div>

                
                   <div> <input type="radio" name="status" value="0" class="inputfieldedittask"><p>Not complete</p></div>
            
                
                <div><input type="radio" name="status" value="1" class="inputfieldedittask"> <p>Complete</p></div>
                
        </div>
        <input type="hidden" name="id" value="<?= $task["id"] ?>">

        <button class="backbutton" type="submit">Update</button>
        </form>

        <form action="delete-task.php" method="post">
            <input type="hidden" name="id" value="<?= $task["id"] ?>">
            <button type="submit" class="backbutton">Delete</button>
        </form>
    </div>


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
    </div>
</body>

</html>