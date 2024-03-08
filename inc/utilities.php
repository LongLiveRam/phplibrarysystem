<?php 
// check data values from a variable like arrays and stop execution
function dieDump($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';

  die();
}
// checking URI for the links in NAV
function uriIs($var) {
  return parse_url($_SERVER['REQUEST_URI'])['path'] == $var;
}

function goToPath($path)
{
  return BASE_PATH . $path; // helper function for the router
}

function loadView($path, $variables = []) 
{
  extract($variables);
  require goToPath('view/' . $path); 
}