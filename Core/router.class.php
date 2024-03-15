<?php //handles all the routing
//namespace implentation
namespace Core;

Class Router {
  //stores all the routes/end points (routes.php)
  protected $routes = [];
  //appends routes array of the routes/end points
  private function addRoutes($uri, $controller, $method) 
  {
    $this->routes[] = [
      'uri' => $uri ,
      'controller' => $controller,
      'method' => $method
    ];
  }
  //listens to GET requests
  public function listenGet($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'GET');
  }
  //listens to POST requests
  public function listenPost($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'POST');
  }
  //listens to DELETE requests
  public function listenDelete($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'DELETE');
  }
  //listens to PATCH requests
  public function listenPatch($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'PATCH');
  }
  //listens to PUT requests
  public function listenPut($uri, $controller) 
  {
    $this->addRoutes($uri, $controller, 'PUT');
  }
  //routes the page to the page depending on the current URI and method
  public function routeTo ($uri, $method = 'GET')
  {
    foreach ($this->routes as $route)
    {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method))
      {
        return require goToPath($route['controller']); //load the controller
      }
    }
    //displays 404 page if there's no controller for the current URI and method passed
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
