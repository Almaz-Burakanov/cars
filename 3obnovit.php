<?php
	require_once 'connect.php';
		$id_cars=$_POST['id_cars'];
		$id_saloon=$_POST['id_saloon'];
		$id_auto=$_POST['id_auto'];
		$cash=$_POST['cash'];
		mysqli_query($mysql, "UPDATE `auto` SET `id_cars` = '$id_cars', `id_saloon` = '$id_saloon', `cash` = '$cash' WHERE `auto`.`id_auto` = '$id_auto'");
		 header('Location: 3app.php');
		?>