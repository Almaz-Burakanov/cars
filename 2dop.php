<?php
	require_once 'connect.php';
		$name=$_POST['name'];
		$address=$_POST['address'];
		mysqli_query($mysql, "INSERT INTO `saloon` (`name`, `address`) VALUES ('$name', '$address')");
        mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update saloon set id_show = @autoid := (@autoid+1)");
		 header('Location: ../2app.php');

		?>