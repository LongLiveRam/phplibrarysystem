<?php 
// location where routes/end points of the apps are stored | controllers views and contains all the logic for the view to display data from database

//main
$router->listenGet('/dashboard','controller/dashboard.controller.php');
$router->listenGet('/accounts', 'controller/users/account.controller.php');
//template
$router->listenGet('/template','template.index.php');

//books
//create
$router->listenGet('/books/create','controller/books/create.controller.php');
$router->listenPost('/books','controller/books/store.controller.php'); 

//read or show
$router->listenGet('/books', 'controller/books/show.controller.php');

//update
$router->listenGet('/books/edit','controller/books/edit.controller.php');
$router->listenPost('/books/update','controller/books/update.controller.php');

//unlist, relist, & delete
$router->listenPost('/books/listing', 'controller/books/listing.controller.php');

//other
$router->listenGet('/books/reports','controller/books/report.controller.php');
