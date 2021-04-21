<?php

require_once("config.php");

$sql = "SELECT name,rating FROM standings";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['rating'] . "</td>";
  echo "</tr>";
  }

     }
  else {
    echo "0 results";
  }

  $conn->close();


?>