<?php
  $time = date('H:i');
  setcookie('times',$time);

  $lasttime = $_COOKIE['times'];
    echo '現在'.$lasttime.'です';
 ?>
