<?php

require_once("config.php");

$resultgameinfo = mysqli_query($conn,"SELECT result FROM games WHERE result IS NULL AND player1_active = 'true' AND player2_active = 'true' ORDER BY starttime DESC LIMIT 1");

  
if (mysqli_num_rows($resultgameinfo) == 1){
    while ($row = mysqli_fetch_assoc($resultgameinfo)) {
        if($row['result'] !== NULL){
            $accessplaygame = 'true'
            echo "finished";
        }
             }
    
    }

    elseif (mysqli_num_rows($resultgameinfo) == 0){
        $accessplaygame = 'true'
        echo "finished";
    }

    else{
        echo 'inprogress';
    }



?>