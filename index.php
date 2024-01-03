<?php
include 'functions.php';
$db = include 'database/start.php';

$posts = $db->getAll('posts');
// $users = $db->getAll('users');
// $categories = $db->getAll('categories');

include  'index.view.php';

?>