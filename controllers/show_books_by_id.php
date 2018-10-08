<?php
include "../models/book_model.php";
include "../views/sisalto/show_books_by_id_view.php";
include "../views/sisalto/show_books_view.php";

session_start();
//jos kirjauduttu
if(isset($_SESSION['idUsers'])) {
    search_book();
    if(isset($_GET['id']) && !empty($_GET['id'])) {
      $book=model_get_book($_GET['id']);
      show_books($book);
    }
}
//jos ei kirjauduttu
else {
  login();
}
?>
