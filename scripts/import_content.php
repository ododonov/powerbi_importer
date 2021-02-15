<?php
if($_POST['code'] != '') {
  $new_content = $_POST['code'];
  $fd = fopen('content.txt', 'a+');
  fwrite($fd, $new_content."\n");
  fclose($fd);
  echo 'success';
}
exit;
?>
