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
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
  </nav>


   <?php
    function logged_in(){
      session_start();
      echo '<article>';
      if(isset($_SESSION['idUsers'])) {

      echo '<div align = "center">';
      echo '<div align = "center"><h2>Tervetuloa <b>'.$_SESSION['user'].' !</h2></b></div><br>';
      echo '<a href="../controllers/nayta_tilit.php">Tilit</a><br><br>';
      echo '<a href="../controllers/luotto.php">Luotto</a><br><br>';
      echo '<a href="../controllers/e_laskut.php">E-laskut</a><br><br>';
      echo '<a href="../controllers/uusimaksu.php">Uusi maksu</a></div>';

      echo '<br><br><br>';
      echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
        header("Location: ../controllers/login.php");
      }  echo '</article>';
    }
   ?>
</section>

<footer>
</footer>
</body>
</html>
