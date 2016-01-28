<?php
  //英数字とアンダーバーのみを使用　且つ　1文字目に数字を使っていない
  $str = "ttt";

  if(preg_match('/^[A-Za-z0-9]+\z/',$str) && !preg_match('/^[0-9]/',$str)){
    echo "\$strはC言語の変数名の条件を満たしています。";
  }else{
    echo "\$strはC言語の変数名の条件を満たしていません。";
  }

 ?>
