<?php
include "../models/book_model.php";
include "../views/sisalto/book_message.php";

session_start();
//jos kirjauduttu
if(isset($_SESSION['idUsers'])) {
$idBooks=$_GET['id'];

$succes=model_delete_book($idBooks);

if($succes){
  $message="Kirjan poisto onnistui";
}
else {
  $message="Ei voitu poistaa";
}

  success_message($message);
}
//jos ei kirjauduttu
else {
  login();
}
 ?>
