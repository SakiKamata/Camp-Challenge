<?php
//課題１・２
 echo 'Hello world.<br>';

 echo 'groove'.'-'.'gear<br>';

//課題3
 echo '自己紹介<br>';
 echo '名前：鎌田早紀<br>';
 echo '家族：4人+1匹、2人姉妹の妹<br>';
 echo '好きなこと：ドライブ<br>';

//課題5.6
 $a=5;
 $b=10;
 $c=2;
 const A=1;
 const B=15;
 
 echo 10-$a;
 echo 15+$b;
 echo $c*A;
 echo B/$a;
 //結果
 echo '10-$a=5<br>';
 echo '15+$b=25<br>';
 echo '$c*A=2<br>';
 echo 'B/$a=3<br>';

 $a=1;
 if($a==1){
 echo '1です!';

}elseif($a==2){
 echo 'プログラムキャンプ！';

}elseif($a=='a'){
 echo '文字です！';

}else{
 echo'その他です!';
}
?>
