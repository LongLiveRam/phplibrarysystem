<?php
// this is responsible for calling containers or objects that is in container class through the bootstrap script
namespace Core;

class Services
{
  //static so there's no need to create an instance of the class
  public static $container;
  public static function setContainer($container)
  {
    static::$container = $container;
  }

  public static function container()
  {
    return self::$container;
  }

  public static function get($key)
  {
    return static::container()->get($key);
  }
  //delegation of the bind function to to just pass it on the actual 
  public static function bind($key, $func)
  {
    static::container()->bind($key, $func);
  }
}