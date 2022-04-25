<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <title>Document</title>
</head>

<body>
    <form action="retrieve.php" method="post">
        <fieldset>
            <label for="">NAME</label>
            <input type="text" name="user_name" id="name">

            <label for="">E-mail</label>
            <input type="email" name="user_email" id="email">

            <label for="">Sex:</label>
            <input type="radio" name="sex" id="female" value="F">
            <label for="female">Feminino</label>
            <input type="radio" name="sex" id="male" value="M">
            <label for="male">Male</label>

            <button type="submit">SEND</button>
        </fieldset>
    </form>
</body>

</html>
