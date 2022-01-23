<HTML>  
<BODY><title>Андриянов</title>
<meta charset="utf-8">
<?php
if (isset($_POST["f1"])) {

$str = $_POST["text"];
$s=$_POST["a"];
$z = str_replace($_POST["a"], '',$_POST["text"]);

if(is_array($z)){
foreach($z as $value){
    if($value == $s){
        $symbl_1 = $symbl_2;
          }
        }
    }
echo" $z";
echo ("<BR> <A href='s3-6.html'> Вернуться назад </A>");
}
if (isset($_POST["f2"])) {

$str1 = $_POST["predl"];
$symbl_1 = $_POST["symbol_1"];
$symbl_2 = $_POST["symbol_2"];
$text = str_replace($_POST["symbol_1"], $_POST["symbol_2"], $_POST["predl"]);

if(is_array($text)){
foreach($text as $value){
    if($value == $symbl_1){
        $symbl_1 = $symbl_2;
          }
        }
    }
echo" $text";
echo ("<BR> <A href='s3-6.html'> Вернуться назад </A>");
}
if (isset($_POST["f3"])) {
  $text2 = $_POST["b"];
  $t2 = array();
  $count = (int)$_POST["c"];
  echo '<h3> Вариант 7 </h3>';
  echo $text2;
  echo '<br> Слова, имеющие число букв ' . $count . ': <br>';
  $t2 = explode(' ', $text2);

  foreach ($t2 as $str) {
    if (iconv_strlen($str, "utf-8") == $count) { echo ($str . '<br>');}
  }
} 
?>
</BODY> 
</HTML>