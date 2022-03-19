<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO history  (type, day1, user_id, id) VALUES ('{$_POST['type']}', '{$_POST['day1']}', '{$_POST['user_id']}', NULL)");
header('location: history.php?user_id='.$_POST['user_id']);
 ?>