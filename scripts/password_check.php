<?php
  $password = $_POST['password'];
  if($password == 'admin'){
    echo("admin");
    exit();
  } else if($password == 'user'){
    echo("user");
    exit();
  } else {
    echo("invalid");
    exit();
  }
?>
