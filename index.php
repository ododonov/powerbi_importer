<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Авторизация</title>
  <link rel = "stylesheet" href = css/style.css>
  <script
		src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous">
  </script>
  <script src = 'scripts/password_check.js'></script>
</head>

  <body>
    <img src = media/kpa.png></img>
    <form method = 'POST' action = ''>
      <input type = 'input'
             id = 'login_holder'
             value = 'Логин'></input>
      <br>
      <input type = 'password'
             id = 'pass_holder'
             value = 'Пароль'></input>
      <br>
      <input type = 'button'
             id = 'pass_check'
             value = 'Войти'></input>
    </form>
  </body>
</html>
