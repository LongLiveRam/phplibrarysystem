<?php
//script for adding book from the create controller/view
//call database
use Core\Database;
use Core\Services;

$db = Services::get(Database::class);

//validation

//if there's an error make if else here and load create view

//if there's no error execute, redirect, and die script
$price = floatval($_POST['price']);
$stock = intval($_POST['book_stock']);

$db->queryDatabase('INSERT INTO books (ISBN, book_title, book_author, pages, date_published, publisher, stock, sold, price, status) VALUES (?,?,?,?,?,?,?,?,?,?)', [
  $_POST['book_ISBN'],
  $_POST['book_title'],
  $_POST['book_author'],
  $_POST['book_pages'],
  $_POST['date_published'],
  $_POST['book_publisher'],
  $_POST['book_stock'],
  0,
  $_POST['price'],
  "Listed"
]);

header('location: /books?operation=success');
die();
