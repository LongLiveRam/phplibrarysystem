<?php
// single point of entry for the web application

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/utilities.php';

// autoloaders for instantiated classes
spl_autoload_register(function ($class) {

  $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);
  require goToPath("{$class}.class.php");

});

// starting of the simple service container 'boostrap'
require goToPath('container.bootstrap.php');

// class the handles the routing of entry points/webpages
$router = new \Core\Router();

// list of entry points
require goToPath('Core/routes.php');

// get current URI selected path in case there's an argument for get requests like /uri/?operation=success
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//check if we got a specific request method (PATCH or PUT) other than POST or GET
$method = $_POST['request__method'] ?? $_SERVER['REQUEST_METHOD'];

// route to the page
$router->routeTo($uri, $method);