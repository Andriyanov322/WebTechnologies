<title> Андриянов Максим ПИ-322</title>
<p> Вариант 1 </p>
<p> Генерация массива из случайных чисел: </p>
<?php
function array_fill_rand($limit, $min=-10, $max=10)
{
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}



// Массив из 20 элементов
$a = array_fill_rand(10);
for ($i=0; $i<10; $i++){
echo $a[$i] . ' ';}
for ($i=1; $i<10; $i++){
	for ($j=0; $j<$i; $j++){
	$b[$i]+=$a[$j];}}
	
$b[0]=$a[0];
echo "<p> Измененный массив: </p>";
for ($i=0; $i<10; $i++){
echo $b[$i] . ' ';}

?>