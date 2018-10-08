<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">

  <?php
  function add_book_form(){

      echo '  <h2>Add book</h2>
        <form class="" action="../controllers/add_book.php" method="post">
          <label for="">Anna kirjan nimi</label><br>
          <input type="text" name="name" value=""><br>
          <label for="">Anna kirjan tekijä</label><br>
          <input type="text" name="author" value=""><br>
          <input type="submit" name="addBtn" value="Lisää">
        </form>';
  }
?>
</body>
</html>
