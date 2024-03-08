<?php
class Database {

  private $connection;
  private $stmt;

  public function __construct($config, $username, $password)
  {
    try {
      $dsn = 'mysql:'. http_build_query($config,"",";");
      $this->connection = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      echo "Error: {$e->getMessage()}";
    }
  }

  public function queryDatabase($query, $data = [])
  {

    $this->stmt = $this->connection->prepare($query);
    $this->stmt->execute($data);

    return $this;
  }
  // control the functions
  // fetch all
  public function getAllRow() 
  {
    return $this->stmt->fetchAll();
  }

  public function getOneRow()
  {
    return $this->stmt->fetch();
  }
  // if there's no return
  public function findRow()
  {
    $response = $this->getOneRow();

    if(!$response)
    {
      abort(); //404
    }

    return $response;
  }
}