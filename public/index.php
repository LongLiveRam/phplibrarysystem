<?php
//single point of entry for the web application


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'inc/utilities.php';

require goToPath('inc/router.php');

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