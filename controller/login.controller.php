<?php

require ('model/database.class.php'); // manually load for now
require ('view/login.view.php');
$config = require ('inc/config.php');
$db = new Database($config['database'], 'root', 'Ramel_PHPServer!');

// dieDump($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $errors = []; // form validation
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = 'SELECT * FROM employees WHERE user_name = :username AND password = :password';

  $response = $db->queryDatabase($query, ['username' => $username, 'password' => $password])->getOneRow();

  if(!empty($response)) {
    dieDump('HELLO');
  } else {
    dieDump('NOT HELLO');
  }
}