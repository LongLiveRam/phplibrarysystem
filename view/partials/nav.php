<nav>
  <div class="logo">
    <h1>Library Management System</h1>
  </div>
  <ul class="nav-items">
    <li><a href="/books" class="<?= uriIs('/books') ? 'current-page' : '' ?>">Home</a></li>
    <li><a href="/books/statistics" class="<?= uriIs('/books/statistics') ? 'current-page' : '' ?>">Statistics</a></li>
    <li><a href="/account" class="<?= uriIs('/account') ? 'current-page' : '' ?>">Account</a></li>
  </ul>
</nav>

<header>
  <h2>Welcome User</h2> <!-- PHP Global Variable for username -->
</header>