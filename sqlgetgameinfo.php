<?php

require_once("config.php");

$resultgameinfo = mysqli_query($conn,"SELECT gameid,player1,player2,playerturn,player1score,player2score FROM games WHERE result IS NULL");
  
if (mysqli_num_rows($resultgameinfo) == 1){

  while ($row = mysqli_fetch_assoc($resultgameinfo)) {
    $_SESSION['gameid'] = (int)$row['gameid'];
    $_SESSION['player1id'] = (int)$row['player1'];
    $_SESSION['player2id'] = (int)$row['player2'];
    $_SESSION['playerturn'] = (int)$row['playerturn'];
    $_SESSION['player1score'] = (int)$row['player1score'];
    $_SESSION['player2score'] = (int)$row['player2score'];
    
}

}
else {echo 'problem';
   die();}

   ?>