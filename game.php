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
    var_dump($row["players_active"]);
    $activeplayers = (int)$row["players_active"] + 1;
    var_dump($activeplayers);
    $gameid = (int)$row["gameid"];
    var_dump($gameid);
    $inserttoken = "UPDATE games SET players_active=$activeplayers WHERE gameid = $gameid";
    if ($conn->query($inserttoken) === FALSE) {
      die();
    }
  }
} 


  




?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="destroysession.php" onclick="endsession()" class="active">Log out </a>
  </div>

<div id="scores"></div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

/*
function fetchdata(){
 $.ajax({
  url: 'fetch_scores.php',
  type: 'post',
  success: function(data){
    $("#scores").empty();
    $("#scores").append(data);
    
   
  },
  complete:function(data){
   setTimeout(fetchdata,5000);
  }
 });
}

$(document).ready(function(){
 setTimeout(fetchdata,5000);
});
*/
</script>
</body>
</html>

