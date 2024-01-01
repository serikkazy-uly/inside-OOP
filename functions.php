<?php

function getAllPosts()
{ 
    $pdo = new PDO('mysql:host=mysql; dbname=app; charset=utf8;', 'user', 'secret');
    //выполнить запрос
    $sql = 'SELECT * FROM posts';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}
function dd($data){
    var_dump($data);  
}