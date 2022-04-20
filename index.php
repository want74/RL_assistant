<?php
session_start();
include 'connect.php';
if ($_SESSION['vhod']==0) {
	$query = mysqli_query($con, "SELECT * FROM bals WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
	$plusOne = $stroka['votes'] + 1;
	$query1 = mysqli_query($con, "UPDATE bals SET votes = '{$plusOne}' WHERE id='{$_GET['id']}'");
	$_SESSION['vhod'] = 1;
}
header("location: accept.php?id={$_GET['id']}");
 ?>