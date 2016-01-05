<?php
  function profile(){
    return array(1,'田中','1988年8月8日','埼玉県');
  }
  $deta = profile();
  foreach ($deta as $key => $value){
    if($key==0){
      continue;
    }
  }
    //echo $deta[1].$deta[2].$deta[3];
    echo $value;

 ?>
