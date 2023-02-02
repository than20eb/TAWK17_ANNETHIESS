<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php 

$colors = ["Red", "Blue", "Green"];

foreach($colors as $color){
    echo($color);
}


foreach($colors as $color){
    echo("<p>{$color}</p>");
}

?>

<h2>Something</h2>

<?php foreach($colors as $color): ?>

    <h3>Color name</h3>

    <p><?= $color ?></p>

<?php endforeach; ?>

</body>
</html>