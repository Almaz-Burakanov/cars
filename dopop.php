<?php
	require_once'connect.php';
	$prod_id=$_GET['id'];
	$prod = mysqli_query($mysql, "SELECT * FROM `cars` WHERE `id`='$prod_id'");
	$prod = mysqli_fetch_assoc($prod);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Добавление машины</title>
</head>
<body>
<h3>Добавление новой машины</h3>
		<form action="dop.php" method="post">
		<p>Марка</p>
		<input type="text" name="marka">
		<p>Модель</p>
		<input type="text" name="model">
		<p>Год выпуска</p>
		<input type="text" name="god">
		<p>Трансмиссия</p>
		<input type="text" name="trans">
		<p>Объем</p>
		<input type="text" name="v">
		<p>Цена</p>
		<input type="text" name="cash"><br><br>
		<button type="sumbit">Добавить</button>
		</form>
</body>
</html>