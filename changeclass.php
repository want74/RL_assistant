<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "UPDATE users SET class = '{$_POST['class']}' WHERE num='{$_POST['num']}'");
header('location: test.php');
 ?>