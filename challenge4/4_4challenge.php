<?php
  $stamp = mktime(0,0,0,1,1,2015);
  $stamp1 = mktime(23,59,59,12,31,2015);
  $sum = $stamp1-$stamp;
  echo $sum;
?>
