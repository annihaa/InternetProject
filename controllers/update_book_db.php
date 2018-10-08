<?php
include "../models/book_model.php";
include "../views/sisalto/update_book_view.php";
include "../views/sisalto/book_message.php";
session_start();
//jos kirjauduttu
if(isset($_SESSION['idUsers'])) {
  if(isset($_POST['updateBtn']) &&!empty($_POST['updateBtn'])) {
    $idBooks=$_POST['updateId'];
    $name=$_POST['new_name'];
    $author=$_POST['new_author'];

    $succes=model_update_book($idBooks,$name,$author);
    if($succes){
      $message="Kirjan muokkaus onnistui";
    }
    else {
      $message="Ei voitu muokata";
    }

    success_message($message);
  }
}
//jos ei kirjauduttu
else {
  login();
}

 ?>
