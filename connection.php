<?php
$server = "localhost";
$user = "sysadmin";
$pass = "Info@1234";
$database = "aula_php";

# Create connection
$conn = new mysqli($server, $user, $pass, $database);
$error = $conn->connect_errno;

if ($conn->connect_errno) {
  header("Location: no_connection.html");
  die("No connection");
}
else {
  echo "Connected";
}
?>