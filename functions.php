<?php


function connect_to()
{
    $pdo = new PDO('mysql:host=mysql; dbname=app; charset=utf8;', 'user', 'secret');
    return $pdo;
}

function dd($data)
{
    var_dump($data);
}
