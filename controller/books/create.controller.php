<?php
// displays the create form to add books
loadView('books/create.view.php', [
  'sample_variable' => 'Home' // when you have variables to use in the views script, use extract function so view script can see the variables.
]);