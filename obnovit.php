<?php
	require_once'connect.php';
		$id=$_POST['id'];
		$marka=$_POST['marka'];
		$model=$_POST['model'];
		$god=$_POST['god'];
		$trans=$_POST['trans'];
		$v=$_POST['v'];
		$cash=$_POST['cash'];
	mysqli_query($mysql, "UPDATE `cars` SET `marka` = '$marka', `model` = '$model', `god` = '$god', `trans` = '$trans', `v` = '$v', `cash` = '$cash' WHERE `cars`.`id` = '$id'");
	
			 header('Location: app.php');
?>