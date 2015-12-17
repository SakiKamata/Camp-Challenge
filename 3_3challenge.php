<?php
//課題3
 function hiki($a=1,$b=5,$type=false){

 $ans=$a*$b;
 $ruijyou=$ans*$ans;

 if($type==false){
	echo $ans;

 }else{
	echo $ruijyou;
 }
}
 $y=5;$kake=25;
 hiki($y,false);

