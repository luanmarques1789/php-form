<?php

include_once("connection.php");

$user = $_POST;

$sql = "INSERT INTO users (name, email) 
          VALUES ('$user[name]', '$user[email]');";

$conn->query($sql);

if ($conn->insert_id) {
  header("Location: registered.html");
}
else {
  header("Location: not_registered.html");
}

?>