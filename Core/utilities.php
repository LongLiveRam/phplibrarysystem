<?php 
// check data values from a variable like arrays and stop execution of script
function dieDump($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';

  die();
}
// checking URI for the links in NAV (needs to be updated)
function uriIs($var) 
{
  return parse_url($_SERVER['REQUEST_URI'])['path'] == $var;
}
// if server root is defined, make a basepath which is decalted in index.php
function goToPath($path)
{
  return BASE_PATH . $path; // helper function for the router
}
//load view function (called from the controllers in the controllers folder)
function loadView($path, $variables = []) 
{
  extract($variables); //extract variables from controllers and pass it on the views file that is loaded
  require goToPath('view/' . $path); //loads the view
}