<?php
  $str = "http://.php";

  if(preg_match('/^(http:\/\/)/',$str)){
      echo "\$strはhttp://で始まります。";
    }else{
      echo "\$strはhttp://で始まりません。";
    }
 ?>
