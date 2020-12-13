<?php
	require_once'connect.php';
	$id=$_GET['id_show'];
	$pr = mysqli_query($mysql, "SELECT * FROM `saloon` WHERE `id_show`='$id'");
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
	<form action="2obnovit.php" method="post">
		<input type="hidden" name="id_show" value="<?=$pr['id_show']?>">
		<p>Название</p>
		<input type="text" name="name" value="<?=$pr['name']?>">
		<p>Адрес</p>
		<input type="text" name="address" value="<?=$pr['address']?>">
		<br><br>
		<button type="sumbit">Изменить параметры</button>
		</form>
</body>
</html>