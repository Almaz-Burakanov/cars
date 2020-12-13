<?php
	require_once'connect.php';
		$id=$_POST['id_show'];
		$name=$_POST['name'];
		$address=$_POST['address'];
	mysqli_query($mysql, "UPDATE `saloon` SET `name` = '$name', `address` = '$address' WHERE `saloon`.`id_show` = '$id'");
	
			 header('Location: 2app.php');
?>
