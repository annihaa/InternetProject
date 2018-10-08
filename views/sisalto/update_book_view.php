<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Tervetuloa NettiPankkiin!</h1>

  <?php
  function update_book_form($idBooks,$name,$author){

      echo '  <h2>Update book</h2>
        <form class="" action="../controllers/update_book_db.php" method="post">
          <label for="">Anna kirjan nimi</label><br>
          <input type="text" name="new_name" value="'.$name.'"><br>
          <label for="">Anna kirjan tekijä</label><br>
          <input type="text" name="new_author" value="'.$author.'"><br>
          <input type="hidden" name="updateId" value="'.$idBooks.'">
          <input type="submit" name="updateBtn" value="Tallenna">
        </form>';
  }
?>
</body>
</html>
