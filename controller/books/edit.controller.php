<?php
use Core\Database;
use Core\Services;
//get database object connection through service container
$db = Services::get(Database::class);

//query the specific record/row on database
$response = $db->queryDatabase('SELECT * FROM books WHERE ISBN = ? LIMIT 1', [
  $_GET['isbn']
])->getAllRow();
//load the view passing the results of the query to $targetBook in edit.view.php
loadView('books/edit.view.php', [
  'targetBook' => $response
]);