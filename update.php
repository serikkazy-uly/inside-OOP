<?php
include 'functions.php';
$db = include 'database/start.php';

// $id = $_GET['id'];
$db->update('posts', 
[
    'title' => $_POST['title'],
],
    $_GET['id']
);

header('Location: index.php');


// 2 вариант

// $id = $_GET['id'];

// // Проверяем наличие ключа "title" в массиве $_POST
// if (isset($_POST['title'])) {
//     $db->update('posts', [
//         'title' => $_POST['title'],
//     ], $id);

//     header('Location: index.php');
// } else {
//     echo 'Error: "title" key is missing in the $_POST array.';
// }
