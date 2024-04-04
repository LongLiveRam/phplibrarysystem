<?php
//get database

use Core\Database;
use Core\Services;

$db = Services::get(Database::class);
//validation and sanitization
//query the update to the database
$db->queryDatabase("UPDATE books SET ISBN = ?, book_name = ?, book_author = ?, book_published = ? WHERE ISBN = ?",[
  $_POST['ISBN'],
  $_POST['bookName'],
  $_POST['bookAuthor'],
  $_POST['datePublished'],
  $_POST['targetISBN']
]);
header('location: /books?operation=sucess');
die();