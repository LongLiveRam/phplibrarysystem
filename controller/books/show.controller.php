<?php
// //use database class with namespace Core (THIS WAS THE OLD WAY BEFORE ADDING A NEW SERVICE CONTAINER)
use Core\Services;
use Core\Database;
// //config file containing the information about the database
// $config = require goToPath('Core/config.php');
// //make a new instance of the database with the config, username, and password
// $db = new Database($config['database'], 'ramel', 'Ramel_PHPServer!');

// $db = Services::getContainer()->get(Database::class);
$db = Services::get(Database::class);

//check if the user wants to view listed or unlisted
//make a query to the database with helper function in class (go to class to explore the function)
if(isset($_GET['view']))
{
  $view = ucfirst($_GET['view']);
  $response = $db->queryDatabase("SELECT * FROM books WHERE book_status = ?",[
    $view
  ])->getAllRow();
}else{
  $response = $db->queryDatabase("SELECT * FROM books")->getAllRow();
}
//load view from the results from the query with $allBooks variable in view page
loadView('books/show.view.php', [
  'allBooks'=> $response
]);