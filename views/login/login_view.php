<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/mystyle.css">
  <body style="background-color:powderblue;">
  <h1 style="text-align:center;">Tervetuloa NettiPankkiin!</h1>
    <p style="text-align:center;">
      Kirjaudu omille sivuille:
    </p>

<?php
    function login(){

        echo '<form class="" action="../controllers/login.php" method="post">
          <label for="username">Käyttäjätunnus:</label> <br>
          <input type="text" id="username" name="username" required> <br>
          <label for="password">Salasana:</label> <br>
          <input type="text" id="password" name="password" required> <br><br>
          <input type="submit" name="loginBtn" value="Kirjaudu">
        </form>';

    }
?>
</body>
</html>
