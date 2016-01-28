<?php
  $str = "htt.php";

  if(preg_match('/.php$/',$str)){
      echo "\$strは.phpで終わります。";
    }else{
      echo "\$strは.phpで終わりません。";
    }
 ?>
