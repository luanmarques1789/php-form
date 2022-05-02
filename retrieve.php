<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$name = $_POST["user_name"];
$email = $_POST["user_email"];

$host = "localhost";
$database = "aula_php";
$user = "rooot";
$password = "";

# Conecting the database
$connection = new mysqli($host, $user, $password, $database);
if ($connection -> connect_error) {
    echo $connection->connect_error;
    die("<p>CONNECTION REFUSED</p>");
}


$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
</head>

<body>
    <?php
    if ($result) {
        echo "<p>Data was inserted sucessfully!</p>";
    } else {
        echo "<p>Error to process data</p>";
    }
    ?>
</body>

</html>