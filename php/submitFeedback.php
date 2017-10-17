<?php
  $txt = json_encode($_POST);
  $txt = $txt.PHP_EOL;
  $myfile = fopen("feedback.txt","a");
  echo $txt;
  fwrite($myfile,$txt);
  fclose($myfile);


  header("Location: ..\\thankyouFeedback.html");

?>
