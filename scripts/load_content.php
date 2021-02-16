<?php
$file = 'content.txt';
$content = "";
$fo = fopen($file, "a");
fclose($fo);
$fo = fopen($file, "r");
if($fo) {
  while(($line = fgets($fo)) !== false) {
    $content = $content."<div>".$line ."</div>";
  }
}
echo($content);
?>
