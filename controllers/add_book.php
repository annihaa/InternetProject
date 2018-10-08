<?php
include "../models/book_model.php";
include "../views/sisalto/add_book_view.php";
include "../views/sisalto/book_message.php";
session_start();
//jos kirjauduttu
if(isset($_SESSION['idUsers'])) {
  add_book_form();
  if(isset($_POST['addBtn']) && !empty($_POST['addBtn'])){
      $name=$_POST['name'];
      $author=$_POST['author'];

    $succes=model_add_book($name,$author);
    if($succes){
      $message="Kirjan lisäys onnistui";
    }
    else {
      $message="Ei voitu lisätä";
    }

    success_message($message);
  }
}
//jos ei kirjauduttu
else {
  login();
}
?>
