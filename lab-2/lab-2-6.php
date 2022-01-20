<body>
<title> Андриянов Максим ПИ-322</title>
<p> Вариант 1 </p>
<?php
  static $a = array();
  require('Andr.php');
  uslovie();
  $n=rand(3,8);
  $a=massiv($a, $n);
  vivod($a, $n);
  $a=obrabotka($a, $n);
  echo '<p> Обработанная матрица: <br> ';
  vivod($a, $n);
  
?>

</body>