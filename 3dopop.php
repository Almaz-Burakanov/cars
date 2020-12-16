<?php
	require_once'connect.php';

?>

</table>
		<h3>Добавление нового автомобиля в наличии</h3>
		<form action="3dop.php" method="post">
		<?php
			$result = mysqli_query($mysql, "SELECT id, model, marka FROM cars");
			echo "<br>ID автомобиля:<br><br><select name='id_cars'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_cars = $row['id'];
				$model = $row['model'];
				$marka = $row['marka'];

				echo "<option value='$id_cars'>$marka $model</option>";
				}
				}
				echo "</select>";
			$result = mysqli_query($mysql, "SELECT id_show, name FROM saloon");
			echo "<br><br>ID автосалона:<br><br> <select name='id_saloon'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_show = $row['id_show'];
				$name = $row['name'];

				echo "<option value='$id_show'>$name</option>";
				}
				}
				echo "</select>";
			?>
			<p>Стоимость</p>
		<input type="text" name="cash">
		<br><br><button type="sumbit">Выбрать стоимость</button>
		</form>
