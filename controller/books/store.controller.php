<?php
//script for adding book from the create controller/view
//call database
use Core\Database;
$config = require goToPath('Core/config.php');

$db = new Database($config['database'], 'ramel', 'Ramel_PHPServer!');

//validation

//if there's an error make if else here and load create view

//if there's no error execute, redirect, and die script
$db->queryDatabase('INSERT INTO books (ISBN, book_name, book_author, book_published) VALUES (?,?,?,?)', [
  $_POST['ISBN'],
  $_POST['bookName'],
  $_POST['bookAuthor'],
  $_POST['datePublished']
]);

header('location: /books?operation=success');
die();
