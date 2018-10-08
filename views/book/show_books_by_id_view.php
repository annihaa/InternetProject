<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Tervetuloa NettiPankkiin!</h1>

  <?php
  function search_book(){

      echo '<h2>Search book</h2>
        <form class="" action="../controllers/show_books_by_id.php" method="get">
          <label for="">Anna kirjan id</label><br>
          <input type="text" name="id" value="">
          <input type="submit" value="Etsi">
        </form>';
  }
?>
</body>
</html>
