<?php

  $fileName = $_SERVER["DOCUMENT_ROOT"]."/data/pageViewCount.txt";
  $myfile = fopen($fileName,"r");
  $txt = fread($myfile,filesize($fileName));
  fclose($myfile);

  $count = (int)$txt;
  $count += 1;
  $myfile = fopen($fileName,"w")  or die("Unable to open file!");
  $txt = (string)$count;
  echo $txt;
  fwrite($myfile,$txt);
  fclose($myfile);

?>
