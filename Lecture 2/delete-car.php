<? php

//connect to DB

//Create connection
$conn = new mysqli("localhost", "root", "ju-cars");
//Check connection
if ($conn -> connect_error) {
    die ("Connection failed: ".$conn->connect_error);

//Get post data
$id = $Post
}