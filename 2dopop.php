<?php
	require_once'connect.php';
	$prod_id=$_GET['id_show'];
	$prod = mysqli_query($mysql, "SELECT * FROM `saloon` WHERE `id_show`='$prod_id'");
	$prod = mysqli_fetch_assoc($prod);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Добавление автосалона</title>
</head>
<body>
<h3>Добавление автосалона</h3>
		<form action="2dop.php" method="post">
		<p>Название</p>
		<input type="text" name="name">
		<p>Адрес</p>
		<input type="text" name="address"><br><br>
		<button type="sumbit">Добавить</button>
		</form>
</body>
</html>