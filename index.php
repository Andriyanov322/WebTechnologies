<!DOCTYPE html>
<html>
<title> Главная страница Андриянова Максима</title>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<p> Дата и время:
<p> 
<?php
 $d=date("d.m.Y H:i");
 echo($d);
?>
<p> Упражнения</p>
<ul class="ex_menu">
	<li><a href="index.php" class="current">Упражнение 1-1(Внутрення ссылка)</a></li>
	<li><a href="lab-1/lab-1-1.php" class="current">Упражнение 1-2</a></li>
	<li><a href="lab-1/lab-1-2.php" class="current">Упражнение 1-3</a></li>
	<li><a href="lab-1/lab-1-3.php" class="current">Упражнение 1-4</a></li>
	<li><a href="lab-1/lab-2-1.php" class="current">Упражнение 1-6</a></li>
	<li><a href="lab-1/lab-2-2.php" class="current">Упражнение 1-7</a></li>
	<li><a href="lab-1/lab-2-3.php" class="current">Упражнение 1-8</a></li>
	<li><a href="lab-1/lab-2-4.php" class="current">Упражнение 1-9</a></li>
	<li><a href="lab-1/lab-2-5.php" class="current">Упражнение 1-10</a></li>
	<li><a href="lab-1/lab-2-6.php" class="current">Упражнение 1-11</a></li>
	<li><a href="lab-1/lab-2-7.php" class="current">Упражнение 1-12</a></li>
	<li><a href="lab-1/lab-2-8.php" class="current">Упражнение 1-13</a></li>
	<li><a href="lab-1/lab-2-9.php" class="current">Упражнение 1-14</a></li>
</ul>
<p> Самостоятельная работа</p>
<ul class="work_menu">
	<li><a href="lab-1/lab-1-5.php" class="current">Задача 1-1</a></li>
	<li><a href="lab-1/lab-2-10.php" class="current">Задача 1-2</a></li>
	<li><a href="lab-1/lab-2-11.php" class="current">Задача 1-3</a></li>
</ul>
	</body>
</html>