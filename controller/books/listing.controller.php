<?php
use Core\Database;
use Core\Services;
//unlist book other than permanently deleting a book in the database

//initialize database from the service container
$db = Services::get(Database::class);

//update the book to unlisted in the database
if(isset($_POST['_relist']))
{
  $db->queryDatabase("UPDATE books SET book_status = 'Listed' WHERE ISBN = ?",[
    $_POST['ISBN']
  ]);
}
else if(isset($_POST['_delete']))
{
  $db->queryDatabase("DELETE FROM books WHERE ISBN = ?",[
    $_POST['ISBN']
  ]);
}
else
{
  $db->queryDatabase("UPDATE books SET book_status = 'Unlisted' WHERE ISBN = ?",[
    $_POST['ISBN']
  ]);
}

header('location: /books?operation=success');
die();