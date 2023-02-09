<?php

$method = $_SERVER["REQUEST_METHOD"];


$inputJSON = file_get_contents("php://input");
$input = json_decode($inputJSON, true);

$book_title = $input["title"];
$book_author = $input["author"];

var_dump($method, $book_title, $book_author);