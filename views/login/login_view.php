<!DOCTYPE html>
<html lang="en">
<head>
<title>ETUSIVU</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="background-color:powderblue;">
  <style>
  * {
      box-sizing: border-box;
  }

  body {
      font-family: Arial, Helvetica, sans-serif;
  }

  header {
      background-color: #52BE80;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
  }

  nav {
      float: left;
      width: 30%;
      background: #ccc;
      padding: 20px;
  }

  article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: #f1f1f1;

  }

  section:after {
      content: "";
      display: table;
      clear: both;
  }

  footer {
      background-color: #777;
      padding: 10px;
      text-align: center;
      color: white;
  }

  @media (max-width: 600px) {
      nav, article {
          width: 100%;
          height: auto;
      }
  }
  </style>
  </head>
  <body>

  <header>
    <h2>Tervetuloa<br>NettiPankkiin!</h2>
  </header>

    <nav>
      <img src="http://www.students.oamk.fi/~t6haan02/aalto.jpg" align= "rightdown" alt="" width="400" height="400">
    </nav>

<?php
    function login(){
      echo '<article>';
      echo '<h2> Kirjaudu sisään: </h2>';

        echo '<form class="" action="../controllers/login.php" method="post">
          <label for="username">Käyttäjätunnus:</label> <br>
          <input type="text" id="username" name="username" required> <br>
          <label for="password">Salasana:</label> <br>
          <input type="text" id="password" name="password" required> <br><br>
          <input type="submit" name="loginBtn" value="Kirjaudu">
        </form>';
  echo '</article>';
    }
?>

<footer>
<div class="content">
          <label for="kieli">Valitse kieli</label>
          <br>
          <select id="kieli" name="kieli" onchange="nayta_kieli()">
            <option value="">Valitse</option>
            <option value="Suomi">Suomi</option><br>
            <option value="Svenska">Ruotsi</option>
          </select>
      </div>

      <div id="tulos">
      </div>

      <script type="text/javascript">
        function nayta_kieli(){
          var kieli=document.getElementById('kieli');
          var valittu_kieli=kieli.options[kieli.selectedIndex].value;
          document.getElementById('tulos').innerHTML="Valittu kieli on: "+valittu_kieli;
        }
      </script>
    </footer>
</body>
</html>
