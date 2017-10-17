<?php
  $txt = json_encode($_POST);
  $txt = $txt.PHP_EOL;
  $myfile = fopen("entries.txt","a");
  echo $txt;
  fwrite($myfile,$txt);
  fclose($myfile);

  header("Location: ..\\thankyou.html");

?>
