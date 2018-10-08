<!DOCTYPE html>
<html lang="en">
<head>
<title>Tililuettelo</title>
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
  <h2>Valitse tarkasteltava tili:</h2>
</header>

  <nav>
    <img src="http://www.students.oamk.fi/~t6haan02/raha.jpg" align= "rightdown" alt="" width="300" height="250">
  </nav>

</head>

<?php //
    function show_books($a){
        echo '<article>';
        echo '<h2>Valitse tili:</h2>';
        echo '<a href="../controllers/Tili1.php">Käyttötili</a><br><br>';
        echo '<a href="../controllers/Tili2.php">Taloustili</a><br><br>';
        echo '<a href="../controllers/Tili3.php">Säästötili</a><br><br>';
      //  echo '<table border="1">';
      //  echo '<tr><th>book_id</th><th>Name</th><th>author</th><th>Poista</th><th>Muokkaa</th><tr>';
        //foreach ($a as $row) {
          //echo '<tr>';
          //echo '<td>'.$row['idBooks'].'</td><td>'.$row['name'].'</td><td>'.$row['author'].'</td>';
          //echo '<td><a href="../controllers/delete_book.php?id='.$row['idBooks'].'">Poista</a></td>';
          //echo '<td><a href="../controllers/update_book.php?id='.$row['idBooks'].'">Muokkaa</a></td>';
          //echo '</tr>';
        //}
        //echo '</table>';
        //echo '<br><a href="../controllers/add_book.php"><button>Lisää kirja</button></a>';
        //echo '<br><br><a href="../controllers/show_books_by_id.php"><button>Etsi kirja</button></a>';
        //echo '<br><hr>';
        echo '<br><a href="../controllers/login_success.php"><button>Palaa etusivulle</button></a>';
        echo '<br><br>';
        echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
        echo '</article>';
}
 ?>

</body>
</html>
