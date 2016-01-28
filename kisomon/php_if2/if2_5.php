<?php
  $str = "start";

  if(preg_match('/a/',$str) || preg_match('/i/',$str) || preg_match('/u/',$str) || preg_match('/e/',$str) || preg_match('/o/',$str)){
    echo "\$strは母音を含みます。";
  }else{
    echo "\$strは母音を含みません。";
  }
 ?>
