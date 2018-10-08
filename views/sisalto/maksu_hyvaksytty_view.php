<!DOCTYPE html>
<html>
<head>
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
    <h2>Maksu hyväksytty!</h2>
  </header>

    <nav>
      <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
    </nav>

<?php
 function logged_in(){ 
   session_start();
   echo '<article>';
   echo '<a href="../controllers/login_success.php"><button>Palaa etusivulle</button></a>';
   echo '<br><br><br>';
   echo '<a href="../controllers/uusimaksu.php"><button>Uusi maksu</button></a>';
   echo '<br><br><br>';
   echo '<a href="../controllers/e_laskut.php"><button>E-laskut</button></a>';
   echo '<br><br><br>';
   echo '<a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
   echo '</article>';
 }
?>

</body>
</html>
