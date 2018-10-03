<?php
include "../models/book_model.php";
include "../views/book/update_book_view.php";
include "../views/book/book_message.php";

session_start();
//jos kirjauduttu
if(isset($_SESSION['idUsers'])) {
  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $idBooks=$_GET['id'];
    $selected_book=model_get_book($idBooks);
    $name=$selected_book[0]['name'];
    $author=$selected_book[0]['author'];

    update_book_form($idBooks,$name,$author);
    }
}
//jos ei kirjauduttu
else {
  login();
}

 ?>
