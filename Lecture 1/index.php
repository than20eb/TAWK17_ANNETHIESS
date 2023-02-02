<?php
// THIS IS A COMMENT

/* 
This is 
a block
comment
*/


$page_title = "TAWK17 Lecture 1";
$my_age = 28;
$random_value = rand(5, 15);

$result = $my_age - $random_value;

$first_name = "Linus";
$last_name = "Rudbeck";

$full_name = $first_name . " " . $last_name;

if($random_value < 10){
    $full_name = "Hello there";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
</head>

<body>

    <h1><?= $page_title ?></h1>

    <p>Random value: <?= $random_value ?></p>
    <p>Result: <?= $result ?></p>
    <p>Full name: <?= $full_name ?></p>

</body>

</html>