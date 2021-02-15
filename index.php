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
      <input type = 'password'
             id = 'pass_holder'></input>
      <br>
      <input type = 'button'
             id = 'pass_check'
             value = 'Ввести пароль'></input>
    </form>
  </body>
</html>
