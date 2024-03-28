<?php
//making a simple service container
//a service container is an object responsible for instantiation of objects in the application.
//input the container how to construct the object, store it, and when you need it, you just ask for it from a get function

namespace Core;

class Container 
{
  //all of the services being contained like a database class
  protected $bindings = [];
  //add services to an associative array
  //key the path of the class and resolver, is the binded function
  public function bind($key, $func)
  {
    $this->bindings[$key] = $func;
  }

  public function get($key)
  {
    $function = $this->bindings[$key];

    return call_user_func($function); //this function excecutes the passed function from bindings
  }
}