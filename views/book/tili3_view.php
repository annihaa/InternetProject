<!DOCTYPE html>
<html lang="en">
<head>
<title>Tili3</title>
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
  <h2>Tarkastele säästötiliä:</h2>
</header>

  <nav>
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
  </nav>

  <h2 style="text-align:center;">Säästötili: </h2>
</head>

<?php
function logged_in(){
  session_start();
  echo '<article>';
  echo '<style>
table, th, td {
    border: 1px solid black;
}
</style>';
  echo '<table>
  <tr>
    <th>Tapahtuma</th>
    <th>Summa</th>
    <th>Saldo</th>
  </tr>
  <tr>
    <td>Osto</td>
    <td>-100 €</td>
    <td>+690 €</td>
  </tr>
  <tr>
    <td>Osto2</td>
    <td>-30 €</td>
    <td>+720 €</td>
  </tr>
  <tr>
    <td>Osto3</td>
    <td>-200 €</td>
    <td>+920 €</td>
  </tr>
  <tr>
    <td>Osto4</td>
    <td>-80 €</td>
    <td>+1000 €</td>
  </tr>
</table>
';
  echo '<br><br>';
  echo '<br><a href="../controllers/login_success.php"><button>Palaa etusivulle</button></a>';
  echo '<a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
  echo '</article>';
}
?>
</body>
</html>
