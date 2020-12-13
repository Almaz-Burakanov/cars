<!doctype html>
<html>
<head>
	<meta charset="UTD-8">
	<title>Автомобили в наличии</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>ID автомобиля</th>
			<th>ID автосалона</th>
			<th>Стоимость</th>
		</tr>
		<?php
			require_once 'connect.php';

			$prod = mysqli_query($mysql,"SELECT
				auto.id_auto,

				cars.model as cars_model,
				cars.cash as cars_cash,

				saloon.name as saloon_name
				

				FROM auto
				LEFT JOIN cars ON auto.id_cars=cars.id
				LEFT JOIN saloon ON auto.id_saloon=saloon.id_show"
			);

			

			while ($stud = mysqli_fetch_array($prod)){
				$auto_id = $stud['id_auto'];
				$cars_model = $stud['cars_model'];
				$cars_cash = $stud['cars_cash'];
				$saloon_name = $stud['saloon_name'];
				


				echo "<tr>";

				echo "<td>$auto_id</td> <td>$cars_model</td> <td>$saloon_name</td> <td>$cars_cash</td> ";
				echo "<td><a class='change_column_anchor ajax' href='3obnov.php?id_auto=<?= $por[0]?>'><span class='nowrap'><img src='http://vicentbadia.com/img/contacto-valencia.png' width='20' height='20'></span></a></td>";
				echo "<td><a style='color: red' href='3delet.php?id_show=<?= $por[0]?>'>X</a></td>";
				echo "</tr>";
			}
		?>
	</table>
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
