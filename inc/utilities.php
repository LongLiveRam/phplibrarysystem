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