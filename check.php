<?php
session_start();
?>
<?php
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE  num='{$_POST['num']}' AND password ='{$_POST['pass']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['id'];
		header('location: main.php');
	}
	else{
		header('location: go.php?error=Неверный номер или пароль');
	}
?>