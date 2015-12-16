<?php
//課題1
 $num=3;
 $message='';
 switch($num){
  	case 1:
   	 $message='one';
	 echo $message;
  	 break;
	case 2:
	 $message='two';
	 echo $message;
	 break;
	default:
	 $message='想定外<br>';
	 echo $message;
	 break;
 }

//課題2
 $num=1;
 $message='';
 switch($num){
	case 1:
	 $message='英語<br>';
	 echo $message;
	 break;
	case 2:
	 $message='日本語';
	 echo $message;
	 break;
}

//課題3
 $eight=1;
 for($i=0;$i<20;$i++){
 $eight*=8;

}	
echo $eight;
echo "<br>";

//課題4
 $z='A';
 for($z=0;$z<30;$z++){
  echo 'A';
 }
 echo "<br>";

//課題5
 $tasi=0;
 for($tasi=0;$tasi<100;$tasi++){
}
 echo $tasi;
 echo "<br>";

//課題6
$key=1000;
while($key>100){
  $key=$key/2;
}
echo '$key';
echo "<br>";

//課題7
$arr=array();
$arr=array(10,100,'soeda','hayasi',-20,118,'END');
//課題8
$arr[2]=33;

//課題9
$arr=array(
	 1=>'AAA',
	 'hello'=>'world',
	 'soeda'=>33,
	 20=>20,
	);
echo $arr['hello'];




