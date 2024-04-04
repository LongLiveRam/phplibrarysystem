<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library System</title>
  <link rel="stylesheet" href="css/template.css">
</head>
<body>
  <nav>
    <div>
      <h1>Library Management System</h1>
    </div>
    <ul class="nav-items">
      <li><a href="#" class="current-page">Home</a></li>
      <li><a href="#">View All Books</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Member</a></li>
      <li><a href="#">Employees</a></li>
      <li><a href="#">Account</a></li>
    </ul>
  </nav>
  <main>

    <section class="add-books">
      <fieldset>
        <legend>List books</legend>
        <form method="POST" action="/books">

          <label for="book_ISBN">ISBN:</label>
          <input type="text" id="book_ISBN" name="ISBN">

          <label for="book_title">Title:</label>
          <input type="text" id="book_title" name="book_title">

          <label for="book_author">Athor:</label>
          <input type="text" id="book_author" name="book_author">

          <label for="book_pages">Max Pages:</label>
          <input type="text" id="book_pages" name="book_pages">

          <label for="date_published">Date Published:</label>
          <input type="text" id="date_published" name="date_published">

          <label for="book_publisher">Publisher:</label>
          <input type="text" id="book_publisher" name="book_publisher">

          <label for="book_stock">Stock:</label>
          <input type="text" id="book_stock" name="book_stock">

          <button>List Book</button>
          <a href="/books" class="cancel">Cancel</a>
        </form>

      </fieldset>
      
    </section>

  </main>
  <!-- <footer>
    <h4>Copyright @ 2024 Ramel Montera</h4>
  </footer> -->
</body>
</html>