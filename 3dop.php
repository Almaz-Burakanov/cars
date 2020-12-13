<?php
	require_once 'connect.php';
		$id_cars=$_POST['id_cars'];
		$id_saloon=$_POST['id_saloon'];
		$id_auto=$_POST['id_auto'];
		$cash=$_POST['cash'];
		mysqli_query($mysql, "INSERT INTO `auto` (`id_cars`,`id_saloon`,`cash`) VALUES ('$id_cars','$id_saloon','$cash')");
		 mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update auto set id_auto = @autoid := (@autoid+1)");
		 header('Location: 3app.php');
		?>