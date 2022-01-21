<?php
session_start();
?>
<?php
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE  email='{$_POST['email']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['id'];
		header('location: game.php');
	}
	else{
		header('location: go.php');
	}
?>