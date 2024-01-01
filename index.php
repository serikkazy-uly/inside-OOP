<?php
include 'functions.php';
include 'db/QueryBuilder.php';

$pdo = connect_to();
$db = new QueryBuilder($pdo);

$posts = $db->getAll();


include  'index.view.php';
