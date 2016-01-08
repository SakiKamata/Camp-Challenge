<?php
  var_dump($_FILES);

  $file_name = 'upload.txt';

  move_uploaded_file(
  $_FILES['userfile']['tmp_name'],$file_name);

 ?>
