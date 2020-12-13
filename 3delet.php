<?php
require_once'connect.php';
$id_auto=$_GET['id_auto'];
mysqli_query($mysql, "DELETE FROM `auto` WHERE `auto`.`id_auto`='$id_auto'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update auto set id_auto = @autoid := (@autoid+1)");
header('Location: 3app.php');
?>