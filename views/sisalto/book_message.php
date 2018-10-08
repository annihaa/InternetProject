<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Tervetuloa NettiPankkiin!</h1>

<?php
  function success_message($message){
    echo $message;
    echo '<br><a href="../controllers/show_books.php">Näytä kirjat</a>';
  }
?>
</body>
</html>
