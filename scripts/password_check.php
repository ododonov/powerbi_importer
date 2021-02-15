<?php
  $password = $_POST['password'];
  if($password == '111'){
    echo("valid");
    exit();
  } else {
    echo("invalid");
    exit();
  }
?>
