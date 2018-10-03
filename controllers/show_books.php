<?php
include "../models/book_model.php";
include "../views/book/show_books_view.php";
include "../views/login/login_view.php";

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
