<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">

  <title>Document</title>
</head>

<body>
  <form action="retrieve.php" method="post">
    <fieldset>
      <legend>FORM EXAMPLE</legend>
      <div>
        <label for="user_name">Name:</label>
        <input type="text" name="user_name" id="user_name" maxlength=200 placeholder="Name">
      </div>

      <div>
        <label for="user_email">E-mail:</label>
        <input type="email" name="user_email" id="user_email" placeholder="E-mail">
      </div>

      <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>

      <div>
        <label for="cpassword">Confirm password:</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
      </div>

      <div>
        <label for="sex">Sex:</label>
        <input type="radio" name="sex" id="sex" value="F">
        <label for="female">Female</label>

        <input type="radio" name="sex" id="sex" value="M">
        <label for="male">Male</label>
      </div>

      <div>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" min="0" max="120" >
      </div>

      <div>
        <label for="city">Cities:</label>
        <select name="city" id="city">
          <option value="maringa">Maringá</option>
          <option value="paranavai" selected>Paranavaí</option>
          <option value="tamboara">Tamboara</option>
        </select>
      </div>

      <div>
        <label for="text">Text:</label><br/>
        <textarea name="text" id="text" maxlength="255" rows="5" cols="20" placeholder="Type some text...">
          </textarea>
        </div>
          <button type="submit">SEND</button>
        </fieldset>
  </form>
</body>

</html>