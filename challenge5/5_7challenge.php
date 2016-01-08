<html>
  <body>
    <from action ="./sample.php" method="post">
      名前：<input type ="text" name = "Name">
      性別：男<input type= "radio" name = "seibetu">
           女<input type= "radio" name = "seibetu">
      趣味：<textarea name ="Hobby"></textarea>
    </from>
<?php
$text = $_POST["Name"];
$radio = $_POST["seibetu"];
$textarea = $_POST["Hobby"];

 ?>
</html>
