<?php //database class connection

namespace Core;

use PDO;
use PDOException;
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
  //query database 
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
  // fetch one row
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
      $this->abort(); //404
    }

    return $response;
  }
  //abort function/go to 404 page
  private function abort($val = 404){
    http_response_code($val);
    require('../view/404.php');
    die();
  }
}