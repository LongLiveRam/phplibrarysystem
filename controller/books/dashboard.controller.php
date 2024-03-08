<?php
// has all the logic and process in the background for the view to render
// when you have variables to use in the views script, use extract function so view script can see the variables.

loadView('books/dashboard.view.php', [
  'sample_variable' => 'Home'
]);