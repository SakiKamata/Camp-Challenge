<?php
 $param1=$_GET['総額'];
 $param2=$_GET['個数'];
 $param3=$_GET['商品種別'];

 $a='雑貨';
 $b='生鮮食品';
 $c='その他';
 $x='１個当たりの値段';

 $x=$param1/$param2;
 echo $x;
 echo $param1;

 if($param1>=3000){
  $param1*1.04;
}elseif($param1>=5000){
  $param1*1.05;
}
  echo $param1;
