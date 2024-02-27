<?php //handles all the routing
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dieDump($uri);

$routes = [
  '/phplibrarysystem/' => 'controller/dashboard.php',
  '/phplibrarysystem/listed-books' => 'controller/listed-books.php',
  '/phplibrarysystem/unlisted-books' => 'controller/unlisted-books.php',
  '/phplibrarysystem/accounts' => 'controller/accounts.php'
];

// if page not found and other http response codes
function abort($val = 404) {
  http_response_code($val);
  require('view/404.php');
  die();
}
// routing of php pages
if(array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  abort();
}