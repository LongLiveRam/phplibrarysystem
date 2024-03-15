<?php 
// location where routes/end points of the apps are stored | controllers views and contains all the logic for the view to display data from database
$router->listenGet('/books', 'controller/books/show.controller.php');
$router->listenGet('/books/create','controller/books/create.controller.php');
$router->listenPost('/books','controller/books/store.controller.php');

$router->listenGet('/accounts', 'controller/users/account.controller.php');