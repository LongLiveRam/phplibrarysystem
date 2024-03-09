<?php //handles all the routing

namespace Core;

Class Router {
  protected $routes = [];

  private function addRoutes($uri, $controller, $method) 
  {
    $this->routes[] = [
      'uri' => $uri ,
      'controller' => $controller,
      'method' => $method
    ];
  }

  public function listenGet($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'GET');
  }

  public function listenPost($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'POST');
  }

  public function listenDelete($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'DELETE');
  }

  public function listenPatch($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'PATCH');
  }

  public function listenPut($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'PUT');
  }

  public function routeTo ($uri, $method = 'GET')
  {
    foreach ($this->routes as $route)
    {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method))
      {
        return require goToPath($route['controller']);
      }
    }

    $this->abort();
    
  }

  private function abort($val = 404) 
  {
    http_response_code($val);
    require('../view/404.php');
    die();
  }
}


// session_start(); //session manager logic
// if(!isset($_SESSION['username']) && parse_url($_SERVER['REQUEST_URI'])['path'] != '/phplibrarysystem/') {
//   $uri = '/phplibrarysystem/';
//   header('Location: /phplibrarysystem/');
// } else {
//   $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// }

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
