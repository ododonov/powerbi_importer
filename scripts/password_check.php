<?php
//подключение к БД

$servername = "mysql";
$username = "powerbi";
$password = "powerbi";
$database = "powerbi";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($servername, $username, $password, $database, 3306);

//проверка логина и пароля, переданных в запросе
  $login = $_POST['login'];
  $password = $_POST['password'];

if ($mysqli->connect_errno) {
    echo "Error MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$result = $mysqli->query("SELECT password, is_admin FROM users WHERE name = $login");
$info = mysqli_fetch_array($result);
if ($password == $info['password'])
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
