<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Tervetuloa NettiPankkiin, olet nyt kirjautunut!</h1>

    <?php
    function logged_in(){
      session_start();
      if(isset($_SESSION['idUsers'])) {
      echo 'Tervetuloa <b>'.$_SESSION['user'].'</b><br>';

      echo '<ul>';
        echo '<li><a href="../controllers/show_books.php">Katso kirjat</a></li>';
        echo '<li><a href="../controllers/show_books_by_id.php">Etsi kirja</a></li>';
        echo '<li><a href="../controllers/add_book.php">Lisää kirja</a></li>';
      echo '</ul>';
      echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
        header("Location: ../controllers/login.php");
      }
    }
     ?>
 </body>
 </html>
