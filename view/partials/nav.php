<nav>
  <div class="logo">
    <h1>Library Management System</h1>
  </div>
  <ul class="nav-items">
    <li><a href="/dashboard" class="<?= uriIs('/dashboard') ? 'current-page' : '' ?>">Home</a></li>
    <li><a href="/books" class="<?= uriIs('/books') ? 'current-page' : '' ?>">View All Books</a></li>
    <li><a href="/books/reports" class="<?= uriIs('/books/reports') ? 'current-page' : '' ?>">Reports</a></li>
    <li><a href="/members" class="<?= uriIs('/members') ? 'current-page' : '' ?>">Members</a></li>
    <li><a href="/employees" class="<?= uriIs('/employees') ? 'current-page' : '' ?>">Employees</a></li>
    <li><a href="/account" class="<?= uriIs('/account') ? 'current-page' : '' ?>">Account</a></li>
  </ul>
</nav>

<header>
  <h2>Welcome User</h2> <!-- PHP Global Variable for username -->
</header>