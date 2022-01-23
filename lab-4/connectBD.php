<?php 
	define ("HOST", "localhost");
	define ("USER", "a0621995_students");
	define ("PASS", "4XjRjBuY");
	define ("DB", "a0621995_students"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
 ?>