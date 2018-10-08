<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <style>
    img {
    max-width: 100%;
    height: auto;
    }
    </style>
<div align=center>
<?php
include "../models/book_model.php";
//include "../views/login/login_view.php";
include "../views/sisalto/nayta_tilit_view.php";

  session_start();
  //jos kirjauduttu
  if(isset($_SESSION['idUsers'])) {
    $books=model_get_books();
    show_books($books);
  }
  //jos ei kirjauduttu
  else {
    login();
  }
?>
</div><br><br>
</body>
</html>
