<?php
require_once'connect.php';
$id=$_GET['id'];
mysqli_query($mysql, "DELETE FROM `cars` WHERE `cars`.`id`='$id'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update cars set id = @autoid := (@autoid+1)");
header('Location: app.php');


?>