<?php 
session_start();
include "connect.php";
$poyas = '+9';
$d= gmdate('H',time()+($poyas*3600));
if ($d<12) {
	$type = 1;
}elseif ($d>11 && $d<16) {
	$type = 2;
}elseif ($d>15 && $d<23) {
	$type = 3;
}
$day = gmdate('Y-m-d');
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_GET['id']}'");
$stroka = $query->fetch_assoc();
$query1 = mysqli_query($con, "INSERT INTO history (type, day1, user_id, id) VALUES ('{$type}', '{$day}','{$_GET['id']}', NULL)");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/site.webmanifest">
	<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RLchik</title>
	
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
		<div class="row">
			<div class="lol mx-auto d-flex">
				<img src="img/check.svg" class="w-50 mx-auto">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col-10 mx-auto">
						<p class="fio text-center">
						<?php 
							echo $stroka['fio'];
						?>
						</p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-10 mx-auto">
						<p class="class text-center">
						<?php 
							echo $stroka['gradeOfClass'];
							echo " ";
							echo $stroka['class']; 
							echo " класс"
						?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>