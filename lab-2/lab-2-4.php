<title> Андриянов Максим ПИ-322</title>
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

echo '<pre>';

// Массив из 10 элементов
$rand_array = array_fill_rand(20);



$counter = 0;
    for ($n = 0; $n<=count($rand_array) + 1; $n++) {
        
        echo $rand_array[$n] . " ";
    } 
    echo "<br>";
    foreach($rand_array as $k){
        if($k > 0) {
            $counter++;
         } else {
            $max[] = $counter;
            $counter = 0;
         }
    }
echo '</pre>';
echo "Максимальное количество подряд идущих положительных элементов: " . max($max);
?>