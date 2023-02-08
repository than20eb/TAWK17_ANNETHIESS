<?php include 'connecttodatabase'?>
</html>
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
    <h1>New Task</h1>
  </header>
  <nav>
    <button class="newTaskButton" onclick="addNewTask()">Back</button>
  </nav>
  <main>
    <div class="divContainer">
      <form name="taskForm" action="create-task.php" onsubmit="return validateForm()" method="post">
        <label for="title">Title:</label><input id="title" type="text" name="title" class=""><br>
        <label for="description">Description:</label><input id="description" type="text" name="description"><br>
        <label for="status">Status:</label> <input id="status" type="number" name="status" value="0"><br>
        <input type="submit" class="submitButton">

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
</body>

</html>
