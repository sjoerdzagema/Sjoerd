<?php
require_once("config.php");


$result301 = mysqli_query($conn,"SELECT gameid,player1,player2,result FROM games ORDER BY endtime DESC LIMIT 1");
  
$player2scores = array();

if (mysqli_num_rows($result301) == 1){

  while ($row = mysqli_fetch_assoc($result301)) {
    $winner = $row['result'];
    $player1 = $row['player1'];
    $player2 = $row['player2'];
    $gameid = $row['gameid'];
$result302 = mysqli_query($conn,"SELECT gameid,score FROM scores WHERE playerid = $player2 AND gameid = $gameid");
  
if (mysqli_num_rows($result302) > 0){

  while ($row = mysqli_fetch_assoc($result302)) {
    $bijzonder = (int)$row['score'];  
    array_push($player2scores, $bijzonder);
    
      }
      
      
}
  }
}

var_dump($player2scores);
$highestscoreplayer2 = max($player2scores)

?>