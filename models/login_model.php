<?php

  function model_get_user_info($user, $pass){
    include "../config/connection.php";
    $sql = $db->prepare("SELECT idUsers FROM users WHERE username = :user AND password = :pass");
  	$sql->execute(array(":user"=>$user, "pass"=>$pass));
  	$result = $sql->fetch(PDO::FETCH_ASSOC);

    return $result['idUsers'];
  }

?>
