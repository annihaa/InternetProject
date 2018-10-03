<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <style>
    img {
    max-width: 100%;
    height: auto;
    }
    </style>
<div align=center>
<?php
include "../views/login/logout_view.php";
session_start();
session_destroy();
logout();
 ?>
</div><br><br>
<img src="http://www.students.oamk.fi/~t6haan02/aalto.jpg" alt="" width="1500" height="50">
</body>
</html>
