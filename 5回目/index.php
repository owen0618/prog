<link rel="stylesheet" href="css/style.css">

<?php

echo "<body>";

//header
echo "<h1>ジャンけん</h1>";
echo "<h2><img src='img/jump.jpeg'>";
echo "<p><span class='a'>ジャンプキャラとじゃんけん！</span></p>";


//main
$b = "✊グー";
$c = "✌️チョキ";
$d = "✋パー";


$character01 =  

$random = mt_rand(1,3);

if ($random === 1){
  echo '<img src="img/gu.jpeg" alt="">';
  echo "<br/>";
  echo $b;
}elseif($random === 2) {
  echo '<img src="img/choki.jpeg" alt="">';
  echo "<br/>";
  echo $c;
}elseif($random === 3){
  echo '<img src="img/par.jpeg" alt="">';
  echo "<br/>";
  echo $d;
}




//$a = 1; 
///$b = 2;

//if($a === 1){
  //echo '1が表示されました'.'<br/>';
//}

//if($b === 2){
  //echo '2が表示されました'.'<br/>';

//}

//便利な機能＝関数を使ってみましょう。

//echo mt_rand(1, 6);

//変数の中に「ランダムな数字」が出るおまじないを収納している
//$random = mt_rand(1,5);

//if ($random === 1){
//echo "1が出ましたよ";
//}elseif($random === 2) {
  //echo "2が出ましたよ";
//}elseif($random === 3){
  //echo "3が出ましたよ";
//}

//echo "PHPの授業1回目";

//演習2
//echo "<p>phpの授業</p>";
//echo "5 + 7"."<br/>";
//echo 5 + 7;

//演習3
//$apple = "りんご";
//$num = 10 + 10;
//echo $apple;
//echo "<br/>";
//echo $num;

//演習4















