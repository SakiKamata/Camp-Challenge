<?php
  $a = 30;
  $b = 10;
  $c = 21;
  if($a == 0){
    echo "aは0と等しい。";
  }elseif($a >= 0){
    if($a > $b && $a > $c && $a > 0){
      echo "aは正の数で、bとcのどちらよりも大きい。";
    }elseif($a < $b && $a > $c && $a > 0 ){
      echo "aは正の数で、bとcの間にある（等号を含む）";
    }else{
      echo "aはbとcのどちらよりも小さい。";
    }
  }else{
    if($a >= $b && $a < 0 ){
      echo "aは負の数で、b以上。";
    }else{
      if($a < 0 && $a < $b && $a >= $c){
        echo "aは負の数で、bより小さく、c以上。";
      }else{
        echo "aは負の数で、bとcよりも小さい。";
      }
    }
  }

 ?>
