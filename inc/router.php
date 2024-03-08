<?php //handles all the routing

// session_start(); //session manager logic
// if(!isset($_SESSION['username']) && parse_url($_SERVER['REQUEST_URI'])['path'] != '/phplibrarysystem/') {
//   $uri = '/phplibrarysystem/';
//   header('Location: /phplibrarysystem/');
// } else {
//   $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// }

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dieDump($uri);
$routes = [
  '/' => 'controller/books/dashboard.controller.php',
  '/books/listed/' => 'controller/books/listed.controller.php',
  '/books/unlisted/' => 'controller/books/unlisted.controller.php',
  '/accounts/users/' => 'controller/users/accounts.php',
];

// if page not found and other http response codes
function abort($val = 404) {
  http_response_code($val);
  require('../view/404.php');
  die();
}
// routing of php pages
if(array_key_exists($uri, $routes)) {
  require goToPath($routes[$uri]);
} else {
  abort();
}