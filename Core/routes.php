<?php 
// location where routes/end points of the apps are stored | controllers views and contains all the logic for the view to display data from database

//main
$router->listenGet('/dashboard','controller/dashboard.controller.php');

//create
$router->listenGet('/books/create','controller/books/create.controller.php');
$router->listenPost('/books','controller/books/store.controller.php');
//read or show
$router->listenGet('/books', 'controller/books/show.controller.php');
//update
$router->listenGet('/books/edit','controller/books/edit.controller.php');
//unlist & delete
$router->listenPost('/books/listing', 'controller/books/listing.controller.php');

$router->listenGet('/accounts', 'controller/users/account.controller.php');