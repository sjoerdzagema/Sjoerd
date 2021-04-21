<?php
require_once("config.php");


$sql1 = "SELECT userID FROM users";
$sql = "INSERT INTO users (name,nickname,username,password) VALUES ('John', 'Doe', 'df',123)";

$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



mysqli_close($conn);

?>