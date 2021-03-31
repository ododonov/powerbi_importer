<?php
//подключение к БД

$servername = "mysql";
$username = "powerbi";
$password = "powerbi";
$database = "powerbi";

$mysqli = new mysqli($servername, $username, $password, $database, 3306);

//проверка логина и пароля, переданных в запросе
  $login = $_POST['login'];
  $password = $_POST['password'];

if ($mysqli->connect_errno) {
    echo "Error MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT * FROM `users` WHERE `name` = $login");
$info = mysqli_fetch_array($res);
if ($login == $info['name'] && $password == $info['password'])
  {
    if ($info['is_admin'] == 1)
    {
      echo "admin";
    }
    else
    {
      echo "user";
    }
  }
else
{
    echo "invalid";
}
?>
