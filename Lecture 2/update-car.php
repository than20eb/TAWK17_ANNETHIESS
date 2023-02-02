<?php 

//Connect DB
//Check connection

$conn = new mysqli("localhost", "root", "", "ju-cars");
//Check connection
if ($conn-> connect_error){
    die("Connection failed: ". $conn->connect_error);
}

//Get post data
$id = $_POST["id"];
$make = $_POST["make"];
$model = $_POST["model"];

//Send post data to DB