<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE users SET num = '{$_POST['num']}' WHERE fio='{$_POST['fio']}'");
header('location: test.php');
 ?>