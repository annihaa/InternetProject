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
      <h1 style="text-align:center;">Kiitos kun käytit NettiPankkia!</h1>
  </header>


    <?php
    function logout(){
      echo '<h2>Olet kirjautunut ulos.</h2><br>';
      echo '<h2>Tervetuloa uudelleen!</h2><br>';
      echo '<br><a href="../controllers/login.php"><button>Kirjaudu</button></a>';
    }
    ?>
  </body>
  </html>
