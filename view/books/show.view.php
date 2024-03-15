<?php 
  require goToPath('view/partials/head.php');
  require goToPath('view/partials/nav.php');
  //view called by the show.controller.php in controllers folder passing $allBooks variable
?>
  <main>
    <section class="dashboard">
      <h3>Welcome to The View All Books Page</h3>
      <a href="books/create" class="add-books">Add books</a>
      <table border="1">
        <thead>
          <caption>Welcome to Ramz Books</caption>
          <th>ISBN</th>
          <th>Title</th>
          <th>Author</th>
          <th>Published</th>
        </thead>
        <tbody>
        <?php foreach($allBooks as $row): ?>
          <tr>
            <td><?= $row['ISBN'] ?></td>
            <td><?= $row['book_name'] ?></td>
            <td><?= $row['book_author'] ?></td>
            <td><?= $row['book_published'] ?></td>
            <td></td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </section>
  </main>
<?php 
  require goToPath('view/partials/footer.php');
?>