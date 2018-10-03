<?php
    function show_books($a){
        echo '<h2>Mommilan kirjasto</h2>';
        echo '<table border="1">';
        echo '<tr><th>book_id</th><th>Name</th><th>author</th><th>Poista</th><th>Muokkaa</th><tr>';
        foreach ($a as $row) {
          echo '<tr>';
          echo '<td>'.$row['idBooks'].'</td><td>'.$row['name'].'</td><td>'.$row['author'].'</td>';
          echo '<td><a href="../controllers/delete_book.php?id='.$row['idBooks'].'">Poista</a></td>';
          echo '<td><a href="../controllers/update_book.php?id='.$row['idBooks'].'">Muokkaa</a></td>';
          echo '</tr>';
        }
        echo '</table>';
        echo '<br><a href="../controllers/add_book.php"><button>Lisää kirja</button></a>';
        echo '<br><br><a href="../controllers/show_books_by_id.php"><button>Etsi kirja</button></a>';
        echo '<br><hr>';
        echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
    }
 ?>
