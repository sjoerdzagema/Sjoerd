<?php
require_once("config.php");

$result = mysqli_query($conn,"SELECT name,rating FROM standings ORDER BY rating DESC");

<table class="table">
  <caption></caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<table class = "table table-hover">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $results->fetch_assoc()) {
            echo"<tr class='table_row'>";
            echo"<td>" . $row['Osman'] . "</td>";
            echo"<td>" . $row['Tanja'] . "</td>";
            echo"<td>" . $row['Christiane'] . "</td>";
            echo"<td>" . $row['Marcella'] . "</td>";
            echo"<td>" . $row['Magarita'] . "</td>";
            echo"<td>" . $row['Nathalie'] . "</td>";
            echo"<td>" . $row['Kommentar'] . "</td>";
            echo"<td>" . $row['Gutschein'] . "</td>";
            echo"<td>" . $row['EC'] . "</td>";
            echo"</tr>";
        }
        ?>
    </tbody>
</table>


echo "<table border='1'>
<tr>
<th>Name</th>
<th>Score</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['rating'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>