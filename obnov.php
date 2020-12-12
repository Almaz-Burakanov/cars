<?php
	require_once'connect.php';
	$id=$_GET['id'];
	$pr = mysqli_query($mysql, "SELECT * FROM `cars` WHERE `id`='$id'");
	$pr = mysqli_fetch_assoc($pr);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>ОБНОВЛЕНИЕ БАЗЫ</title>
</head>
<body>
	<h3>ОБНОВЛЕНИЕ БАЗЫ</h3>
	<form action="obnovit.php" method="post">
		<input type="hidden" name="id" value="<?=$pr['id']?>">
		<p>Марка</p>
		<input type="text" name="marka" value="<?=$pr['marka']?>">
		<p>Модель</p>
		<input type="text" name="model" value="<?=$pr['model']?>">
		<p>Год выпуска</p>
		<input type="text" name="god" value="<?=$pr['god']?>">
		<p>Трансмиссия</p>
		<input type="text" name="trans" value="<?=$pr['trans']?>">
		<p>Объем выпуска</p>
		<input type="text" name="v" value="<?=$pr['v']?>">
		<p>Стоимость</p>
		<input type="text" name="cash" value="<?=$pr['cash']?>"><br><br>
		<button type="sumbit">Изменить параметры машины</button>
		</form>
</body>
</html>