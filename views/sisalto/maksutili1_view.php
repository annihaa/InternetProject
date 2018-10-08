<!DOCTYPE html>
<html lang="en">
<head>
<title>Tili1</title>
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
  <h2>Uusi maksu</h2>
</header>

  <nav>
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
  </nav>

  <article>
<h2>Maksun tiedot:</h2>
<form id="sourceForm"  align="left">


<h3>Syötä maksun tiedot:</h3><br>
<form id="targetForm" class="myForm">
  <label for="valittu_tili">Valittu tili:</label><br/>
  <input type="text" value="Käyttötili"/><br/>
  <label>IBAN:</label><br/>
  <input type="text"><br/>
  <label>BIC:</label><br/>
  <input type="text"><br/>
  <label>Vastaanottajan nimi:</label><br/>
  <input type="text"><br/>
  <label>Viite/viesti:</label><br/>
  <input type="text"><br/>
  <label>Eräpäivä:</label><br/>
  <input type="text"><br/>
  <label>Määrä (€):</label><br/>
  <input type="text"><br/>
</form>
</article>


<?php
function logged_in(){
  session_start();

echo '<footer>';
echo '<br><br><br><br>';
echo '<br><align="left"><a href="../controllers/maksu_hyvaksytty.php"><button>Hyväksy maksu</button></a>';
echo '<br><br>';
echo '<a href="../controllers/uusimaksu.php"><button>Peruuta</button></a>';
echo '</div>';
echo '</footer>';
}
?>



</body>
</html>
