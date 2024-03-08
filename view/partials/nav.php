<nav>
  <div class="logo">
    <h1>Library Management System</h1>
  </div>
  <ul class="nav-items">
    <li><a href="/" class="<?= uriIs('/') ? 'current-page' : '' ?>">Home</a></li>
    <li><a href="/books/listed/" class="<?= uriIs('/books/listed/') ? 'current-page' : '' ?>">Listed Books</a></li>
    <li><a href="/phplibrarysystem/public/unlisted-books/" class="<?= uriIs('/phplibrarysystem/public/unlisted-books') ? 'current-page' : '' ?>">Unlisted Books</a></li>
    <li><a href="/phplibrarysystem/public/accounts/" class="<?= uriIs('/phplibrarysystem/public/accounts') ? 'current-page' : '' ?>">Account</a></li>
  </ul>
</nav>

<header>
  <h2>Welcome User</h2> <!-- PHP Global Variable for username -->
</header>