<?php

  function uslovie() {
    echo "<p> В матрице Z(n,n) каждый элемент столбца разделить на диагональный, стоящий в
том же столбце. Исходный и скорректированный массивы вывести на экран.";
  }

  function massiv($a, $n) {
    for ($i = 0; $i < $n; $i++) {
      for ($j = 0; $j < $n; $j++) {
	$a[$i][$j]=rand(1,10);
      }
    }
  return $a;
  }

  function vivod($a, $n) {
    echo "<p><table border=1 >";
    for ($i = 0; $i < $n; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $n; $j++) {
        echo "<td align=center width=25 height=32>";
	echo $a[$i][$j];
        echo "</td>";
      }
      echo "</tr>";
      } 
    echo "</table>";
  }

  function obrabotka($a, $n) {
    for ($i = 0; $i < $n; $i++) {
      for ($j = 0; $j < $n; $j++) {
	$b[$i][$j]=round($a[$i][$j]/$a[$j][$j],2);
      }
    }
  return $b;
  }


?>