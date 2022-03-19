<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "DELETE FROM users WHERE num='{$_POST['num']}'");
header('location: test.php');
 ?>