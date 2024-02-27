<nav>
    <div class="logo">
      <h1>Library Management System</h1>
    </div>
    <ul class="nav-items">
      <li><a href="/phplibrarysystem" class="<?= uriIs('/phplibrarysystem/') ? 'current-page' : '' ?>">Home</a></li>
      <li><a href="listed-books" class="<?= uriIs('/phplibrarysystem/listed-books') ? 'current-page' : '' ?>">Listed Books</a></li>
      <li><a href="unlisted-books" class="<?= uriIs('/phplibrarysystem/unlisted-books') ? 'current-page' : '' ?>">Unlisted Books</a></li>
      <li><a href="accounts" class="<?= uriIs('/phplibrarysystem/accounts') ? 'current-page' : '' ?>">Account</a></li>
    </ul>
  </nav>
  
  <header>
    <h2>Welcome User</h2> <!-- PHP Global Variable for username -->
  </header>