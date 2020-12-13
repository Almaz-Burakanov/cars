<?php
	require_once'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Салоны</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Название</th>
			<th>Адрес</th>
		</tr>
		<?php
			$poryadok=mysqli_query($mysql, "SELECT * FROM `saloon`");
			$poryadok = mysqli_fetch_all($poryadok);
			foreach ($poryadok as $por){
				?>
				<tr>
					<td><?= $por[0]?></td>
					<td><?= $por[1]?></td>
					<td><?= $por[2]?></td>
					<td><a class="change_column_anchor ajax" href="2obnov.php?id_show=<?= $por[0]?>"><span class="nowrap"><img src="http://vicentbadia.com/img/contacto-valencia.png" width="20" height="20"></span></a></td>
					<td><a style="color: red" href="2delet.php?id_show=<?= $por[0]?>">X</a></td>
		</tr>
		<?php
			}
	
		?>
		
		</table>
		<br><br>
		<button onclick="window.location.href ='2dopop.php';"><img src="https://www.clipartmax.com/png/full/65-653367_car-price-icon-leasing.png" width="100" height="100" alt="" style="vertical-align:middle"> 
    Добавить новую машину</button>
	<br><a style="color: #1fcecb" href=" ind.php">Назад</a>
		
</body>
<style>
		th {
			background: #6600ff; 
			color:#fff;
			}
		td {
			background:#1fcecb;
			}
		th,td {
			padding:5px;
			}
</style>
</html>
