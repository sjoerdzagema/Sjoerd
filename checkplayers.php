<?php

session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: https://localhost/Sjoerd/login.html");
    die();
}

require_once("config.php");

$token = ($_POST['token']);

$usernamecheck = $_SESSION['usernamelogin'];
$useridcheck = $_SESSION['userid'];
//var_dump($usernamecheck);

// player 1 or player 2

$result = mysqli_query($conn,"SELECT gameid,player1,player2 FROM games WHERE result IS NULL AND token = $token");


if (mysqli_num_rows($result) == 1){

  while ($row = mysqli_fetch_assoc($result)) {

    if ($useridcheck == $row['player2']){
      var_dump($useridcheck);
      $rowgameid =(int)$row['gameid'];
     $updateactivestatus = "UPDATE games SET player2_active = 'true' WHERE gameid = $rowgameid";
      
    if ($conn->query($updateactivestatus) === FALSE) {     
              echo "problem";}
    }

  }

    }  
    



else{die();}


?>
