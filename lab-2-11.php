<title> Андриянов Максим ПИ-322 </title>
<p> Вариант 1 </p>
<p> Делители случайного числа: </p>
<?php
$a=rand(1,10000);
print 'Число: ' . $a . '<br>';
print 'Делители <br>';
   for ($i=1; $i<=$a; $i++){  
if ($a % $i==0)      
  echo "$i <br>";
}
?>