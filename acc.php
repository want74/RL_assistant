<?php 
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_GET['id']}'");
$stroka = $query->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<style>
		body {
			background: #F5F5F5;
		}

		.lol {
			position: relative;
			top: -200px;
			background: #00FF75;
			border-radius: 215px;
			width: 250px;
			height: 250px;
		}

		.kek {
			position: relative;
			top: -250px;
		}
		.fio {
			font-size: 30px;
			font-weight: bold;
		}

		.class {
			font-size: 24px;
		}
	</style>
</head>
<body>
	<div class="col">
		<div class="row"><img src="img/aitalPIDR.svg" class="pidr w-100"></div>
		<div class="row">
			<div class="kek">
				<h2 class="text-white ml-4">Результаты QR-кода</h2>
			</div>
		</div>
	</div>
	
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>