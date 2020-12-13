<?php
	require_once 'connect.php';
		$id_cars=$_POST['id'];
		$id_saloon=$_POST['id_show'];
		$id_auto=$_POST['id_auto'];
		$cash=$_POST['cash'];
		mysqli_query($mysql, "INSERT INTO `auto` (`id`,`id_show`,`cash`) VALUES ('$id_cars','$id_show','$cash')");
		 mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update auto set id_auto = @autoid := (@autoid+1)");
		 header('Location: 3app.php');
		?>