<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
?>

  <main>

    <section class="dashboard">
      <h3>Welcome to The List Books Page</h3>
      <form method="POST" action="/books">
        <div>
          <h3>Add Books</h3>
        </div>
        <div>
          <label for="bookName">Book Name:</label>
          <input type="text" name="bookName" id="bookName">
        </div>
        <div>
          <label for="bookAuthor">Book Author:</label>
          <input type="text" name="bookAuthor" id="bookAuthor">
        </div>
        <div>
          <label for="datePublished">Date:</label>
          <input type="date" name="datePublished" id="datePublished">
        </div>
        <div>
          <label for="ISBN">ISBN:</label>
          <input type="text" name="ISBN" id="ISBN">
        </div>
        <button>Add</button>
        <a href="/books">Back</a>
      </form>
    </section>

  </main>

<?php 
  require goToPath('view/partials/footer.php');
?>