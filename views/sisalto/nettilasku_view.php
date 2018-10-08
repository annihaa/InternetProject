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
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<header>
  <h2>Nettilasku</h2>
</header>

  <nav>
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
  </nav>

  <?php
  function logged_in(){
    session_start();
    echo '<article>';
    echo '<div class="dropdown">
      <button class="dropbtn">Valitse maksutili</button>
      <div class="dropdown-content">
        <a href="#">Käyttötili</a>
        <a href="#">Taloustili</a>
        <a href="#">Säästötili</a>
      </div>
    </div><br><br>';
    echo  '<form id="targetForm" class="myForm">
      <label for="valittu_tili">Valittu tili:</label><br/>
      <input type="text" value="Käyttötili"/><br/>
      <label>IBAN:</label><br/>
      <input type="text" value="FI12 3456 7890 1234 56"><br/>
      <label>BIC:</label><br/>
      <input type="text" value="BIC123456"><br/>
      <label>Vastaanottajan nimi:</label><br/>
      <input type="text" value="Matti Meikäläinen"><br/>
      <label>Viite/viesti:</label><br/>
      <input type="text" value="11 22333 44455 66777"><br/>
      <label>Eräpäivä:</label><br/>
      <input type="text" value="12.12.2018"><br/>
      <label>Määrä (€):</label><br/>
      <input type="text" value="920 "><br/>
      </form>';
      echo '<br><align="left"><a href="../controllers/maksu_hyvaksytty.php"><button>Hyväksy maksu</button></a>';
      echo '<br><br>';
      echo '<a href="../controllers/uusimaksu.php"><button>Peruuta</button></a>';
    echo '</article>';
}
?>
