<html>
	<?php
		require_once 'connect.php';
		$prod_id=$_GET['id_auto'];

		$prod = mysqli_query($mysql,"SELECT
				auto.id_auto,
				auto.cash,
				
				cars.id as id_cars,
				cars.marka as cars_marka,
				cars.model as cars_model,
				cars.cash as cars_cash,
				
				saloon.id_show as saloon_id_show,
				saloon.name as saloon_name
				

				FROM auto
				LEFT JOIN cars ON auto.id_cars=cars.id
				LEFT JOIN saloon ON auto.id_saloon=saloon.id_show
				WHERE id_auto='$prod_id'"
				
			);

		if ($prod){
			$prod = $prod->fetch_array();
			$auto_cash = $prod['cash'];
			$auto_id = $prod['id_auto'];
			$id_cars = $prod['id_cars'];
			$cars_marka = $prod['cars_marka'];
			$cars_model = $prod['cars_model'];
			$cars_cash = $prod['cars_cash'];
			$id_saloon = $prod['saloon_id_show'];
			$saloon_name = $prod['saloon_name'];
		}
	?>

	<head><title>ОБНОВЛЕНИЕ БАЗЫ</title></head>
	<body>
		<h3>ОБНОВЛЕНИЕ БАЗЫ</h3>
		<form action="3obnovit.php" method="post">
			<input type="hidden" name="id_auto" value="<?=$prod_id?>">
			<?php
				$result = mysqli_query($mysql,"SELECT
					id,
					marka,
					model
					FROM cars
					WHERE id<>$id_cars"
				);

				echo "<br>ID автомобиля<br><br> <select name='id_cars'>";
				echo "<option selected value='$id_cars'>$cars_marka $cars_model</option>";
				if ($result){
					while ($row = $result->fetch_array()){
						$cars_id = $row['id'];
						$model = $row['model'];
						$marka = $row['marka'];
						echo "<option value='$cars_id'>$marka $model</option>";
					}
				}
				echo "</select>";

				$result = mysqli_query($mysql,"SELECT
					id_show,
					name
					FROM saloon
					WHERE id_show<>$id_saloon"
				);

				echo "<br><br>ID автосалона<br><br> <select name='id_saloon'>";
				echo "<option selected value='$id_saloon'>$saloon_name</option>";
				if ($result){
					while ($row = $result->fetch_array()){
						$id = $row['id_show'];
						$name = $row['name'];
						echo "<option value='$id'>$name</option>";
					}
				}
				echo "</select>";
			?>
				<p>Стоимость</p>
				<input type="text" name="cash" value="<?=$auto_cash?>">
			<br><br><button type="sumbit">Изменить параметры</button>
		</form>
	</body>
</html>