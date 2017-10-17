<?php
  $txt = json_encode($_POST);
  $txt = $txt.PHP_EOL;
  $myfile = fopen("candidateFeedback.txt","a");
  fwrite($myfile,$txt);
  fclose($myfile);

  $txt = $_POST["Name"];
  $txt = $txt.PHP_EOL;
  $myfile = fopen("inducted.txt","a");
  fwrite($myfile,$txt);
  fclose($myfile);


  header("Location: ..\\thankyouFeedback.html");

?>
