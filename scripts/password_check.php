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

$res = $mysqli->query("SELECT count(*) FROM users WHERE name = $login");
$row = mysql_fetch_row($res);
if ($row[0] > 0)
{
    $pass_check = $mysqli->query("SELECT password FROM users WHERE name = $login");
    if ($password == $pass_check)
      {
      $admin_check = $mysqli->query("SELECT is_admin FROM users WHERE name = $login");
      if ($admin_check == 1)
      {
        echo "admin";
      }
      else
      {
        echo "user";
      }
    }
}
else
{
    echo "invalid";
}
?>
