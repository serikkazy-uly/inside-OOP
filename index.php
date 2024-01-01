<?php
include 'functions.php';
include 'db/QueryBuilder.php';
$pdo = connect_to();

$db = new QueryBuilder;
$posts = $db->getAll($pdo);


include  'index.view.php';
