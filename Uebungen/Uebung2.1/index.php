<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br />";

mysqli_select_db($conn, $database);

echo "Datenbank ausgewählt!<br />";


$sql = "Select * from customers where job_title = 'Purchasing Representative'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $result->num_rows . " Resultate <br>";
  var_dump($result);
} else {
  echo "Keine Resultate vorhanden";
}

?>


