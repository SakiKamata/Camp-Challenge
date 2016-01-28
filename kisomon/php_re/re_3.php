<?php
  $str = "http://www.php";

  if(preg_match('/^http:\/\//',$str) && preg_match('/.php\z/',$str)){
      echo "\$strはhttp://から始まり、.phpで終わります。";
  }elseif(preg_match('/^http:\/\//',$str) && !preg_match('/.php\z/',$str)){
      echo "\$strはhttp://から始まりますが、.phpで終わりません。";
  }else{
      echo "\$strはhttp://からは始まりません。";
  }
  ?>
