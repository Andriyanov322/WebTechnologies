<!DOCTYPE html>
<html>
<title> Главная страница </title>
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
<ul class="main_menu">
	<li><a href="index.php" class="current">Упражнение 1-1(Внутрення ссылка)</a></li>
	<li><a href="lab-1-1.php" class="current">Упражнение 1-2</a></li>
	<li><a href="lab-1-2.php" class="current">Упражнение 1-3</a></li>
	<li><a href="lab-1-3.php" class="current">Упражнение 1-4</a></li>
</ul>
	</body>
</html>