<?php

require_once("config.php");

$resultgameinfo = mysqli_query($conn,"SELECT result FROM games ORDER BY endtime DESC LIMIT 1");

  
if (mysqli_num_rows($resultgameinfo) == 1){
    while ($row = mysqli_fetch_assoc($resultgameinfo)) {
        if($row['result'] !== NULL){
            echo "finished";
        }
       
      }
    
    }
    else{
        echo 'inprogress';
    }



?>