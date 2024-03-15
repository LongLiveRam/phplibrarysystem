<?php
//database class connection
namespace Core;

use PDO; //PDO class used to avoid conflict with our namespace
use PDOException;

class Database {
  //variables for connection and statement of the query
  private $connection;
  private $stmt;
  //constructor to make the connection to the database with credentials and information about the database
  public function __construct($config, $username, $password)
  {
    try {
      $dsn = 'mysql:'. http_build_query($config,"",";");
      $this->connection = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      echo "Error: {$e->getMessage()}";
    }
  }
  //accepts query from controllers with prepared statements argument data
  public function queryDatabase($query, $arguments = [])
  {
    $this->stmt = $this->connection->prepare($query);
    $this->stmt->execute($arguments);
    //return the result
    return $this;
  }

  // control the functions
  // fetch all
  public function getAllRow() 
  {
    //get all the rows found from a query
    return $this->stmt->fetchAll();
  }
  // fetch one row
  public function getOneRow()
  {
    //get specific row from a query
    return $this->stmt->fetch();
  }
  // check if there's a row found and abort if not found
  public function findRow()
  {
    $response = $this->getOneRow();
    if(!$response)
    {
      $this->abort(); //404
    }
    return $response;
  }
  //native abort function/go to 404 page (also found in utilities.php)
  private function abort($val = 404){
    http_response_code($val);
    require('../view/404.php');
    die();
  }
}