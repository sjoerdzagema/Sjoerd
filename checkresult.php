<?php

require_once("config.php");

$resultgameinfo = mysqli_query($conn,"SELECT result FROM games WHERE result IS NULL");
  
if (mysqli_num_rows($resultgameinfo) == 1){

echo "inprogress";
    
}

elseif (mysqli_num_rows($resultgameinfo) == 0){
    echo "finished";

}
else {echo 'problem sir';
   die();}

?>