<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
?>

  <main>

    <section class="add-books">

      <fieldset>
        <legend>List books</legend>

        <form method="POST" action="/books">

          <label for="book_ISBN">ISBN:</label>
          <input type="text" id="book_ISBN" name="book_ISBN">

          <label for="book_title">Title:</label>
          <input type="text" id="book_title" name="book_title">

          <label for="book_author">Athor:</label>
          <input type="text" id="book_author" name="book_author">

          <label for="book_pages">Max Pages:</label>
          <input type="text" id="book_pages" name="book_pages">

          <label for="date_published">Date Published:</label>
          <input type="date" id="date_published" name="date_published">

          <label for="book_publisher">Publisher:</label>
          <input type="text" id="book_publisher" name="book_publisher">

          <label for="book_stock">Stock:</label>
          <input type="text" id="book_stock" name="book_stock">

          <label for="price">Price:</label>
          <input type="text" id="price" name="price">

          <button>List Book</button>
          <a href="/books" class="cancel">Cancel</a>
        </form>

      </fieldset>
      
    </section>

  </main>

<?php 
  require goToPath('view/partials/footer.php');
?>