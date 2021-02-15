<?php
  $new_content = $_POST['code'];
  $fd = fopen('content.txt', 'w');
  fclose($fd);
  echo 'success';
exit;
?>
