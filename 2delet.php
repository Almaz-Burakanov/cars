<?php
require_once'connect.php';
$id=$_GET['id_show'];
mysqli_query($mysql, "DELETE FROM `saloon` WHERE `saloon`.`id_show`='$id'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update saloon set id_show = @autoid := (@autoid+1)");
header('Location: ../2app.php');


?>