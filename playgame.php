<?php 
session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: https://localhost/Sjoerd/login.html");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="dashboard.css">


<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.display-1 {
  font-size: 400%;
  text-align: center;
}

.display-2 {
  font-size: 175%;
  text-align: center;
}

</style>

</head>
<body>


<div class="topnav" id="myTopnav">
<a href="playgame.php" class="active">Play Game</a>
  <a href="dashboard.php">Standing</a>
    <a href="#contact">Stats</a>
  <a href="#about">Bets </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<?php
$username = $_SESSION['usernamelogin']
?>

<div class="container">
<div class="row">
  <div class="col-sm"><h5 class="display-2"><?php echo $username ?></h5></div>
  <div class="col-sm" ><h1 class="display-1">301</h1></div>
  <form>
    <div class="row">
    <div class="col text-center">
      <div class="col-xs-12">
        <label for="ex1">score <?php echo $username ?></label>
        <input class="form-control" id="ex1" type="text">
      </div>      
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>  
  </div>
</div>
</div>
  
<div class="container">
<div class="row">
  <div class="col-sm"><h5 class="display-2"><?php echo $username ?></h5></div>
  <div class="col-sm" ><h1 class="display-1">301</h1></div>
  <form>
    <div class="row">
    <div class="col text-center">
      <div class="col-xs-12">
        <label for="ex1">score <?php echo $username ?></label>
        <input class="form-control" id="ex1" type="text">
      </div>      
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>
      </div>  
  </div>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
