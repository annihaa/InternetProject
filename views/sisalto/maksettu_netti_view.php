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
    <h2>E-laskun tarkemmat tiedot:</h2>
  </header>

    <nav>
      <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
    </nav>

    <article>
      <h2> Nettilasku </h2>
        <div>
        <h3> Valittu tili: Käyttötili <br></h3>
        <h3> IBAN: FI12 3456 7890 1234 56 <br></h3>
        <h3> BIC: BIC123456 <br></h3>
        <h3> Vastaanottajan nimi: Matti Meikäläinen<br></h3>
        <h3> Viite/viesti: 11 22333 44455 66777 <br></h3>
        <h3> Eräpäivä: 12.12.2018 <br></h3>
        <h3> Määrä (€): 40 <br></h3>
      </div>
    </article>

    <?php
     function logged_in(){
       session_start();
       echo '<div align = "center">';
       echo '<br><a href="../controllers/login_success.php"><button>Palaa etusivulle</button></a>';
       echo '<br><a href="../controllers/e_laskut.php"><button>Palaa E-laskuihin</button></a>';
     }
    ?>

  </body>
  </html>
