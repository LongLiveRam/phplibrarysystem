<?php
//single point of entry for the web application


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/utilities.php';

//autoloaders for instantiated classes
spl_autoload_register(function ($class) {

  $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);
  require goToPath("{$class}.class.php");

});

$router = new \Core\Router();

require goToPath('Core/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];

$router->routeTo($uri, $method);

// require ('model/database.class.php');

// $config = require('inc/config.php');

// $db = new Database($config['database'], 'root', 'Ramel_PHPServer!');

// $dataFromUsers = $_GET['status'];

// //one way of preparing statements with ?

// $query = "SELECT * FROM books where status = ?";

// $db->queryDatabase($query,[$dataFromUsers]);

// //one way of preparing statements with named :nameOfVar

// $query = "SELECT * FROM books where status = :status";

// $response = $db->queryDatabase($query,['status' => $dataFromUsers])->fetchAll();

// dieDump($response);