<?php
 function profile($id){
   $tanaka = array(1,'田中','1988年8月8日',null);
   $suda = array(2,'須田','1993年3月3日','東京都');
   $izawa = array(3,'伊沢','1977年7月7日','東京都');

   return array($tanaka,$suda,$izawa);
 }
 $A=profile(1);
 foreach($A as $key =>$value){
  foreach($value as $key =>$B){
   if($B == null || $key ==0){
     continue;
   }
  echo $B."<br>";
 }
}

 ?>
