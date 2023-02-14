<?php require_once __DIR__ . "/connecttodatabase.php";?>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="lab1.css">
  <title>New Task Creation</title>
</head>

<body>
  <header>
    <h1>New Task</h1>
  </header>
  <main>
    <div id="bodycontainer"> 
    <div class="newTaskContainer">
      <form name="taskForm" action="create-task.php" onsubmit="return validateForm()" method="post">
        <label for="title">Title:</label><input id="title" type="text" name="title" class="inputfield"><br>
        <label for="description">Description:</label><input id="description" type="text" name="description" class="inputfield"><br>
        <label for="status">Status:</label> <input id="status" type="number" name="status" value="0" class="inputfield"><br>
        <button class="submitbutton">Submit</button>
        <button class="backbutton" onclick="addNewTask()">Back</button>
      </form>
    </div>
  </main>

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

    function addNewTask() {
      console.log("add new task function");
      location.href = "index.php";
    }
  </script>
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
  minHeight: 800.00,
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
