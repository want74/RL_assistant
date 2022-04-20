<?php
session_start();
include 'connect.php';
if ($_SESSION['vhod']==1) {
	$query = mysqli_query($con, "SELECT * FROM bal WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
	$plusOne = $stroka['votes'] - 1;
	$query1 = mysqli_query($con, "UPDATE bal SET votes = '{$plusOne}' WHERE id='{$_GET['id']}'");
	$_SESSION['vhod'] = 0;
}
header("location: accept.php?id={$_GET['id']}");

 ?>