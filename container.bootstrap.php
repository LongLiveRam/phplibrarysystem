<?php
//manages which to bind objects in the Container class
use Core\Container;
use Core\Database;
use Core\Services;

$container = new Container();

//add new object, Database object
$container->bind('Core\Database', function () {

  $config = require goToPath('Core/config.php');
  
  return new Database($config['database'], 'ramel', 'Ramel_PHPServer!');

});

//so the application can access
Services::setContainer($container);

//how to call the class/object listed in the container
// $db = $container->get('Core\Database');