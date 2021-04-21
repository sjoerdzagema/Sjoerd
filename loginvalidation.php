<?php

require_once("config.php");


if (empty($_POST['username']) ||
    empty($_POST['password'])) {
    
    die('Please fill all required fields!');
}


$username = ($_POST['username']);
$password = ($_POST['password']);

$sql = "SELECT userID,username,password FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = $result->fetch_row();
session_start();
$_SESSION['userLogin'] = "Loggedin";
$_SESSION['usernamelogin'] = $username;
$_SESSION['userid'] = $row[0];
require_once("settimelogin.php");

header('Location: https://localhost/Sjoerd/dashboard.php');
     }
  else {
    echo "0 results";
  }

  $conn->close();


?>