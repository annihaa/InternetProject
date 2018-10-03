<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Kiitos kun käytit NettiPankkia!</h1>
    <p style="text-align:center;">
      Tervetuloa uudelleen!
    </p>
    <?php
    function logout(){
      echo 'Olet kirjautunut ulos<br>';
      echo '<br><a href="../controllers/login.php"><button>Kirjaudu</button></a>';
    }
    ?>
  </body>
  </html>
