<?php

session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: https://localhost/Sjoerd/login.html");
    die();
}

require_once("config.php");

$player1 = $_SESSION['userid'];
$player2 = ($_POST['player2']);
$token = ($_POST['token']);
$playerstartgame = ($_POST['playercanstart']);
var_dump($playerstartgame);


$result1 = mysqli_query($conn,"SELECT userID,username FROM users WHERE username = '$player2'");

if (mysqli_num_rows($result1) == 1){

    while ($row = mysqli_fetch_assoc($result1)) {
        $player2id = $row['userID'];
        var_dump($player2id);}
    }
else{
    echo "user needs to put in a new number";
}

$result2 = mysqli_query($conn,"SELECT userID,username FROM users WHERE username = '$playerstartgame'");

if (mysqli_num_rows($result2) == 1){

    while ($row = mysqli_fetch_assoc($result2)) {
        $playerstartnameid = $row['userID'];
        }
    }
else{
    echo "user needs to put in a new number";
}



$result = "INSERT INTO games(player1,player2,token,playerstart) VALUES ($player1, $player2id,$token,$playerstartnameid)";
if ($conn->query($result) === TRUE) {echo "new game created";}
else {
    echo "Error: " . $result . "<br>" . $conn->error;
  }

$conn->close();

//$result = mysqli_query($conn,"INSERT gameid,players_active,token FROM games WHERE result IS NULL AND token = $token");


/*
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
*/


?>
