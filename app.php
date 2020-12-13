<?php
	require_once'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Автомобили</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Марка</th>
			<th>Модель</th>
			<th>Год выпуска</th>
			<th>Трансмиссия</th>
			<th>Объем выпуска</th>
			<th>Цена</th>
		</tr>
		<?php
			$poryadok=mysqli_query($mysql, "SELECT * FROM `cars`");
			$poryadok = mysqli_fetch_all($poryadok);
			foreach ($poryadok as $por){
				?>
				<tr>
					<td><?= $por[0]?></td>
					<td><?= $por[1]?></td>
					<td><?= $por[2]?></td>
					<td><?= $por[3]?></td> 
					<td><?= $por[4]?></td>
					<td><?= $por[5]?></td>
					<td><?= $por[6]?></td>
					<td><a class="change_column_anchor ajax" href="obnov.php?id=<?= $por[0]?>"><span class="nowrap"><img src="http://vicentbadia.com/img/contacto-valencia.png" width="20" height="20"></span></a></td>
					<td><a style="color: red" href="delet.php?id=<?= $por[0]?>">X</a></td>
		</tr>
		<?php
			}
	
		?>
		
		</table>
		<br><br>
		<button onclick="window.location.href ='dopop.php';"><img src="https://img2.pngio.com/red-ford-mustang-png-picture-png-mart-red-mustang-png-1710_1134.png" width="100" height="100" alt="" style="vertical-align:middle"> 
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