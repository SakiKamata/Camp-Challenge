<?php
  $str ='groove gear';
  $strs = mb_strlen($str);

  if($strs > 10){
    echo "$str"."の文字数は11字以上です。";
  }else{
    echo "$str"."の文字数は10字以下です。";
  }

 ?>
