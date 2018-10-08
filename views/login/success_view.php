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
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>
  <div id="navbar">
  <a class="active" href="javascript:void(0)">Etusivu</a>
  <a href="../controllers/nayta_tilit.php">Tilit</a>
  <a href="../controllers/luotto.php">Luotto</a>
  <a href="../controllers/e_laskut.php">E-laskut</a>
  <a href="../controllers/uusimaksu.php">Uusi maksu</a>
    <a href="../controllers/logout.php">Kirjaudu ulos</a>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<header>
  <h2>Tervetuloa<br>NettiPankkiin!</h2>
</header>

  <nav>
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="400" height="380">
  </nav>


   <?php
    function logged_in(){
      session_start();
      echo '<article>';
      if(isset($_SESSION['idUsers'])) {
      echo '<h2>Tervetuloa <b>'.$_SESSION['user'].' !</h2></b><br>';
      echo '<a href="../controllers/nayta_tilit.php">Tilit</a><br><br>
       <a href="../controllers/luotto.php">Luotto</a><br><br>
       <a href="../controllers/e_laskut.php">E-laskut</a><br><br>
       <a href="../controllers/uusimaksu.php">Uusi maksu</a></div>
       <br><br><br>';
      echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
        header("Location: ../controllers/login.php");
      }  echo '</article>';
    }
   ?>
</section>
</body>
</html>
