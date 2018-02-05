<?php

  $fileName = $_SERVER["DOCUMENT_ROOT"]."/data/siteViewCount.txt";
  $myfile = fopen($fileName,"r");
  $txt = fread($myfile,filesize($fileName));
  fclose($myfile);

  $count = (int)$txt;
  $count += 1;
  $myfile = fopen($fileName,"w")  or die("Unable to open file!");
  $siteViewCount = (string)$count;
  // echo $siteViewCount;
  fwrite($myfile,$siteViewCount);
  fclose($myfile);
?>
