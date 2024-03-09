<?php //location where routes/end points of the apps are stored

$router->listenGet('/', 'controller/books/dashboard.controller.php');
$router->listenGet('/books/listed/', 'controller/books/listed.controller.php');
$router->listenGet('/books/unlisted/', 'controller/books/unlisted.controller.php');

$router->listenGet('/accounts/', 'controller/users/account.controller.php');