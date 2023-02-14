<?php

$books = [
    [
        "id" => 1,
        "title" => "Harry P",
        "author" => "JKR"
    ],
    [
        "id" => 2,
        "title" => "LOTR",
        "author" => "JRR"
    ]
];

$books_json = json_encode($books);

header('Content-Type: application/json; charset=utf-8');
echo $books_json;