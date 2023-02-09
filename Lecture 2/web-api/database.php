<?php 

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "ju_bookstore";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if(!$conn){
    die("Connection failed");
}