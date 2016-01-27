<?php
  $a = 2;
  $b = 6;
  $c = 10;
  if($a > $b && $a > $c){
    echo "aはbとcのどちらよりも大きい。";
  }elseif($a > $b || $a > $c){
    echo "aはbかcの片方より大きい。";
  }elseif($a < $b && $a < $c){
    echo "aはbとcのどちらよりも小さい。";
  }else{
    echo "aとbとcは等しい。";
  }
 ?>
