<?php
  $a = 30;
  $b = 10;
  $c = 21;
  if($a == 0){
    echo "aは0と等しい。";
  }elseif ($a > 0 && $a > $b && $a > $c) {
    echo "aは正の数で、bとcのどちらよりも大きい。";
  }elseif($a > 0 && $a <= $b && $a >= $c){
    echo "aは正の数で、bとcの間にある（等号を含む）";
  }elseif($a > 0 && $a < $b && $a < $c){
    echo "aは正の数で、bとcのどちらよりも小さい。";
  }elseif($a < 0 && $a >= $b){
    echo "aは負の数で、b以上。";
  }elseif($a < 0 && $a < $b && $a >= $c){
    echo "aは負の数で、bより小さく、c以上";
  }elseif($a < 0 && $a < $b && $a < $c){
    echo "aは負の数で、bとcのどちらよりも小さい。";
  }
  ?>
