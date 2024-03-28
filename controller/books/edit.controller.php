<?php

use Core\Database;
use Core\Services;
$db = Services::get(Database::class);
//query the specific record/row on database
$response = $db->queryDatabase('SELECT * FROM books WHERE ISBN = ? LIMIT 1', [
  $_GET['isbn']
])->getAllRow();
//load the view
loadView('books/edit.view.php', [
  'targetBook' => $response
]);