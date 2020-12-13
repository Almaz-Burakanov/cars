<?php
	require_once'connect.php';

?>

</table>
		<h3>Добавление нового расписания</h3>
		<form action="3dop.php" method="post">
		<?php
			$result = mysqli_query($mysql, "SELECT id, model, marka FROM cars");
			echo "<br><br>ID автомобиля:<br><br><select name='id'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id = $row['id'];
				$model = $row['model'];
				$marka = $row['marka'];

				echo "<option value='$id '>$marka $model</option>";
				}
				}
				echo "</select>";
			$result = mysqli_query($mysql, "SELECT id_show, name FROM saloon");
			echo "<br><br>ID автосалона:<br><br> <select name='id_show'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_show = $row['id_show'];
				$name = $row['name'];

				echo "<option value='$id_show'>$name</option>";
				}
				}
				echo "</select>";
			$result = mysqli_query($mysql, "SELECT id, cash FROM cars");
			echo "<br><br>ID автомобиля:<br><br><select name='id'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id = $row['id'];
				$cash = $row['cash'];
				

				echo "<option value='$cash '>$cash</option>";
				}
				}
				echo "</select>";
			?>
		<br><br><button type="sumbit">Добавить новое расписание</button>
		</form>
