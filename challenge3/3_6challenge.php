<?php
 function profile($id){
   $tanaka = array(1,'田中','1988年8月8日','埼玉県');
   $suda = array(2,'須田','1993年3月3日','東京都');
   $izawa = array(3,'伊沢','1977年7月7日','東京都');

   $id1 = $tanaka;
   $id2 = $suda;
   $id3 = $izawa;


  if($id==1){
    return $id1;

   }elseif($id==2){
    return $id2;

   }else{
     return $id3;
   }

 }

  $A = profile(1);
  foreach ($A as $key => $value) {
    if($key = 0){
      continue;
    }
  }
    echo "$value"

 ?>
