<HTML>  
<BODY><title>Андриянов</title>
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
$text = $_POST["b"];
$j=0;
$t=array();  
$f= $_POST["c"];
$con=explode(" ",$text);
$len=count($con);
foreach ($con as $str) {
    if(mb_strlen($str)==$f*2){
        
        echo $str;
        echo "<br>";
        $j++;
    }
    }
    if($j==0){
        echo "слов с таким кол-вом букв нет";
}
}
?>
</BODY> 
</HTML>