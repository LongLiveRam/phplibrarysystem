<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
  //view called by the show.controller.php in controllers folder passing $allBooks variable
?>
  <main>
    <section class="view-books">
      <div>
        <a href="books" class="btn">All Books</a>
        <a href="books?view=listed" class="btn">Listed Books</a>
        <a href="books?view=unlisted" class="btn">Unlisted Books</a>
        <a href="books/create" class="btn">Add books</a>
      </div>
      <table border="1">
        <thead>
          <caption>View All Books</caption>
          <th>ISBN</th>
          <th>Title</th>
          <th>Author</th>
          <th>Published</th>
          <th>Action</th>
        </thead>
        <tbody>
        <?php foreach($allBooks as $row): ?>
          <tr>
            <td><?= $row['ISBN'] ?></td>
            <td><?= $row['book_name'] ?></td>
            <td><?= $row['book_author'] ?></td>
            <td><?= $row['book_published'] ?></td>
            <td>
              <form method="POST" action="books/listing">
                <input type="hidden" name="ISBN" value="<?= $row['ISBN'] ?>">

                <?php 
                  if($row['book_status'] == 'Unlisted'){
                ?>
                <input type="submit" value="Relist" name="_relist">
                <input type="submit" value="Delete" name="_delete">
                <?php 
                  }else{
                ?>
                  <input type="hidden" name="_action" value="relist">
                  <button>Unlist</button>
                <?php } ?>

              </form>
              <a href="books/edit?isbn=<?= $row['ISBN'] ?>">Edit</a>
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