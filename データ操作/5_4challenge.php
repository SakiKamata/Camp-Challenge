<?php
  session_start();
    $_SESSION['time'] = $time = date('現在'.'H:i'.'です');

    echo $_SESSION['time'];
 ?>
