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
include "../models/login_model.php";
include "../views/login/login_view.php";

  login();
  if (isset($_POST['username']) && !empty($_POST['username'])){
    $succes=model_get_user_info($_POST['username'],$_POST['password']);
      if($succes){
        session_start();
        $_SESSION['idUsers']=$succes;
        $_SESSION['user']=$_POST['username'];
        header("Location: login_success.php");
      }
      else {}
  }
?>
</div><br><br>

</body>
</html>
