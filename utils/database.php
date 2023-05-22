<?php
$conn = mysqli_connect("82.223.8.163", "obt", "Obt!2023", "OBT", "53306");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>