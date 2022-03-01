<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE users SET num = '{$_POST['num']}' WHERE id='{$_POST['id']}'");
header('location: test.php');
 ?>