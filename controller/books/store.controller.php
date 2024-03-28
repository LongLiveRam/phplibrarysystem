<?php
//script for adding book from the create controller/view
//call database
use Core\Database;
use Core\Services;

$db = Services::get(Database::class);

//validation

//if there's an error make if else here and load create view

//if there's no error execute, redirect, and die script
$db->queryDatabase('INSERT INTO books (ISBN, book_name, book_author, book_published, book_status) VALUES (?,?,?,?,?)', [
  $_POST['ISBN'],
  $_POST['bookName'],
  $_POST['bookAuthor'],
  $_POST['datePublished'],
  "Listed"
]);

header('location: /books?operation=success');
die();
