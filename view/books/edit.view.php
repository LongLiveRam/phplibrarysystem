<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
?>
<main>
  <section class="dashboard">
    <?= $targetBook[0]['book_author'] ?>
    <h3>Edit Book</h3>
    <form method="POST" action="/books/update">
      <input type="hidden" name="_method" value="UPDATE">
      <input type="hidden" name="targetISBN" value="<?= $targetBook[0]['ISBN']?>">
      <div>
        <label for="bookName">Book Name:</label>
        <input type="text" name="bookName" id="bookName" value="<?= $targetBook[0]['book_name'] ?>">
      </div>
      <div>
        <label for="bookAuthor">Book Author:</label>
        <input type="text" name="bookAuthor" id="bookAuthor" value="<?= $targetBook[0]['book_author'] ?>">
      </div>
      <div>
        <label for="datePublished">Date:</label>
        <input type="date" name="datePublished" id="datePublished" value="<?= $targetBook[0]['book_published'] ?>">
      </div>
      <div>
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN" value="<?= $targetBook[0]['ISBN'] ?>">
      </div>
      <button>Update</button>
      <a href="/books">Cancel</a>
    </form>
  </section>
</main>
<?php 
  require goToPath('view/partials/footer.php');
?>