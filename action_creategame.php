<?php
session_start();

require_once("config.php");


if (empty($_POST['player1']) ||
    empty($_POST['player2']) || empty($_POST['inputtoken'])) {
    
    die('Please fill all required fields!');
}


$player1 = ($_POST['player1']);
$player2 = ($_POST['player2']);
$token = ($_POST['inputtoken']);

var_dump($player1);
var_dump($player2);
var_dump($token);

$_SESSION['player1'] = $player1;
$_SESSION['player2'] = $player2;

if($_SESSION['usernamelogin'] == $player1 and $_SESSION['username'] == $player2){
    var_dump("Both player 1 and player 2 are logged in");
}





?>