<?php
  $a = 4;
  $b = 2;
  if($a > $b && $a > 0){
    echo "aは正の数で、bより大きい。";
  }elseif($a < $b && $a > 0){
    echo "aは正の数で、b以下。";
  }else{
    echo "aは負の数。";
  }
 ?>
