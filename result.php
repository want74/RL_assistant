<?php
	include 'connect.php';
	$query = mysqli_query($con, "SELECT * FROM bals ORDER BY votes DESC");
	$stroka = $query->fetch_assoc();
	echo $stroka['pair'];
	echo $stroka['votes'];
 ?>