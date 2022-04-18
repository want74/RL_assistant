<?php 
session_start();
include "connect.php";

$query = mysqli_query($con, "SELECT * FROM bal WHERE id='{$_GET['pair_id']}'");
$stroka = $query->fetch_assoc();
$plusOne = $stroka['votes'] - 2;
echo $plusOne;
$query1 = mysqli_query($con, "UPDATE bal SET votes = '{$plusOne}' WHERE id='{$_GET['pair_id']}'");
header("location: accept.php?pair_id={$_GET['pair_id']}");
 ?>