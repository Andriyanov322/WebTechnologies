<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Андриянов Максим</title>
</head>
<body>
	<?php
	 include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $zapros="DELETE FROM vedomost WHERE id_vedomost=" . $_GET['id_vedomost'];
	 $mysqli->query($zapros);
	 header("Location: index.php");
	 exit;
	?>

</body>
</html>