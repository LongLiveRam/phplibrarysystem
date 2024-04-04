<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
  //view called by the show.controller.php in controllers folder passing $allBooks variable
?>
  <main>
    <section class="view-all-books">
      <div class="all-books-actions">
        <a href="books?all=true" class="<?= isset($_GET['all']) && $_GET['all'] == 'true' ? 'selected' : '' ?>">All Books</a>
        <a href="books?view=listed" class="<?= isset($_GET['view']) && $_GET['view'] == 'listed' ? 'selected' : '' ?>">Listed Books</a>
        <a href="books?view=unlisted" class="<?= isset($_GET['view']) && $_GET['view'] == 'unlisted' ? 'selected' : '' ?>">Unlisted Books</a>
        <a href="books/create">Add books</a>
      </div>
      <table class="listed-books-table">
        <thead>
          <th>ISBN</th>
          <th>Title</th>
          <th>Author</th>
          <th>Published</th>
          <th>Publisher</th>
          <th>Available Stock</th>
          <th>All Time Sold</th>
          <th>Current Price</th>
          <th>Action</th>
        </thead>
        <tbody>
        <?php foreach($allBooks as $row): ?>
          <tr>
            <td><?= $row['ISBN'] ?></td>
            <td><?= $row['book_title'] ?></td>
            <td><?= $row['book_author'] ?></td>
            <td><?= $row['date_published'] ?></td>
            <td><?= $row['publisher'] ?></td>
            <td><?= $row['stock'] ?></td>
            <td><?= $row['sold'] ?></td>
            <td>$<?= $row['price'] ?></td>
            <td>
              <form method="POST" action="books/listing">
                <input type="hidden" name="ISBN" value="<?= $row['ISBN'] ?>">

                <?php 
                  if($row['status'] == 'Unlisted'){
                ?>
                <input type="submit" class="book-relist" value="Relist" name="_relist">
                <input type="submit" class="book-delete" value="Delete" name="_delete">
                <?php 
                  }else{
                ?>
                  <input type="hidden" name="_action" value="relist">
                  <button class="book-delist">Delist</button>
                <?php } ?>

                <a href="books/edit?isbn=<?= $row['ISBN'] ?>" class="book-edit">Edit</a>
              </form>
            </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </section>
  </main>
<?php 
  require goToPath('view/partials/footer.php');
?>