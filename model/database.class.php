<?php
class Database {

  private $connection;

  public function __construct($config, $username, $password)
  {
    try {
      $dsn = 'mysql:'. http_build_query($config,"",";");
      $this->connection = new PDO($dsn, $username, $password);
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

  public function queryDatabase($query, $data = [])
  {

    $stmt = $this->connection->prepare($query);
    $stmt->execute($data);

    return $stmt;
  }
}