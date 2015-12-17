
<?php
 function profile(){
  $num1='id';
  $num2='name';
  $num3='sei';
  $num4='address';
  return array($num1,$num2,$num3,$num4);
}
  $my=profile();
  foreach($my as $value){
 if($value=='id'){
	continue;
 }
	
  echo $value.'<br>';
 
 }
