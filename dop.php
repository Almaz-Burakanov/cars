<?php
	require_once 'connect.php';
		$marka=$_POST['marka'];
		$model=$_POST['model'];
		$god=$_POST['god'];
		$trans=$_POST['trans'];
		$v=$_POST['v'];
		$cash=$_POST['cash'];
		mysqli_query($mysql, "INSERT INTO `cars` (`marka`, `model`, `god`, `trans`, `v`, `cash`) VALUES ('$marka', '$model', '$god', '$trans', '$v', '$cash')");
        mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update cars set id = @autoid := (@autoid+1)");
		 header('Location: app.php');

		?>