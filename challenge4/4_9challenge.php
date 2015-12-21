<?php
  $fp = fopen('4_8challenge.txt','r');
  $file_txt= fgets($fp);
  fclose($fp);

  echo $file_txt;
 ?>
