<?php
$servername = "mysql";
$username = "powerbi";
$password = "powerbi";
$database = "powerbi";

$mysqli = new mysqli($servername, $username, $password, $database, 3306);
if ($mysqli->connect_errno) {
    echo "Error MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT count(*) FROM users WHERE name = 'admin'");
$row = mysql_fetch_row($res);
if ($row[0] > 0)
{
    $admin_check = $mysqli->query("SELECT is_admin FROM users WHERE name = 'admin'");
    if ($admin_check == 1)
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
