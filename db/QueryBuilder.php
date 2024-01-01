<?php

class QueryBuilder
{
   // protected $pdo;
   // public function __construct($pdo)
   // {
   //    $this->$pdo = $pdo;
   // }
   // $db = new QueryBuilder(pdo);
   function getAll($pdo){   
      $sql = 'SELECT * FROM posts';
      $stmt = $pdo->prepare($sql);
      $stmt->execute();

      $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $posts;

   }
}
