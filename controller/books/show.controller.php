<?php
//use database class with namespace Core
use Core\Database;
//config file containing the information about the database
$config = require goToPath('Core/config.php');

//make a new instance of the database with the config, username, and password
$db = new Database($config['database'], 'ramel', 'Ramel_PHPServer!');

//make a query to the database with helper function in class (go to class to explore the function)
$response = $db->queryDatabase("SELECT * FROM books")->getAllRow();

//load view from the results from the query with $allBooks variable in view page
loadView('books/show.view.php', [
  'allBooks'=> $response
]);