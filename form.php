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
  <form id="form" action="retrieve.php" method="post">
    <fieldset>
      <legend>FORM EXAMPLE</legend>
      <div class="break">
        <label for="user_name">Name:</label>
        <input type="text" class="field" name="user_name" id="user_name" maxlength=200 placeholder="Name">
      </div>

      <div class="break">
        <label for="user_email">E-mail:</label>
        <input type="email" class="field" name="user_email" id="user_email" placeholder="E-mail">
      </div>

      <div class="break">
        <label for="password">Password:</label>
        <input type="password" class="field" name="password" id="password" placeholder="Password">
      </div>

      <div class="break">
        <label for="cpassword">Confirm password:</label>
        <input type="password" class="field" name="cpassword" id="cpassword" placeholder="Confirm password">
      </div>

      <div class="break">
        <label for="sex">Sex:</label>
        <input type="radio" name="sex" id="sex" value="F">
        <label for="female">Female</label>

        <input type="radio" name="sex" id="sex" value="M">
        <label for="male">Male</label>
      </div>

      <div class="break">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" min="0" max="120">
      </div>

      <div class="break">
        <label for="city">Cities:</label>
        <select name="city" id="city">
          <option value="maringa">Maringá</option>
          <option value="paranavai" selected>Paranavaí</option>
          <option value="tamboara">Tamboara</option>
        </select>
      </div>

      <div class="break">
        <label for="text">Text:</label><br />
        <textarea name="text" id="text" maxlength="100" placeholder="Type some text...">
          </textarea>
      </div>
      <button type="reset">RESET</button>
      <button type="submit">SEND</button>
    </fieldset>
  </form>
</body>

</html>