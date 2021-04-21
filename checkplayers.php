<?php

session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: https://localhost/Sjoerd/login.html");
    die();
}

require_once("config.php");

$token = ($_POST['token']);

$result = mysqli_query($conn,"SELECT gameid,players_active,token FROM games WHERE result IS NULL AND token = $token");


if (mysqli_num_rows($result) == 1){

  while ($row = mysqli_fetch_assoc($result)) {
    //var_dump($row["players_active"]);
    $activeplayers = (int)$row["players_active"] + 1;
    //var_dump($activeplayers);
    $gameid = (int)$row["gameid"];
    //var_dump($gameid);
    $inserttoken = "UPDATE games SET players_active=$activeplayers WHERE gameid = $gameid";
    if ($conn->query($inserttoken) === TRUE) {
      if ($activeplayers == 2){
        echo "gameready";
      }
      if ($activeplayers == 1){
        echo "waiting other player";
      }
      if ($activeplayers > 2){
        
      echo "problem";}
    }
  }
}
else{die();}


?>
