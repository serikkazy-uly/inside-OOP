<?php

class QueryBuilder
{
   protected $pdo;

   public function __construct($pdo)
   {
      $this->pdo = $pdo;
   }

   public function getAll($table)
   {
      $sql = "SELECT * FROM {$table}";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function getOne($table, $id)
   {
      // dd([$table, $id]);
      $sql = "SELECT * FROM {$table} WHERE id=:id";

      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
   }

   public function create($table, $data)
   {
      $keys = implode(',', array_keys($data));
      $tags = ":" . implode(', :', array_keys($data));

      $sql = "INSERT INTO {$table} ({$keys}) VALUES({$tags})";

      $stmt = $this->pdo->prepare($sql);
      $stmt->execute($data);
   }
}
