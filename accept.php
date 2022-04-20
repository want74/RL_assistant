<?php
	session_start();
	include 'connect.php';
	$query = mysqli_query($con, "SELECT * FROM bals WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
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
		@font-face {
			font-family: GVP;
			/* Good Vibes Pro */
			src: url(GoodVibesCyr.ttf);
			/* Путь к файлу со шрифтом */
		}

		body {
			background: #FFFAFC;
			font-family: GVP;
		}

		.lol {
			background: #00FF75;
			border-radius: 215px;
			width: 250px;
			height: 250px;
			margin-top: 150px;
		}

		.fio {
			font-size: 30px;
			font-weight: bold;
		}

		.class {
			font-size: 24px;
		}

		.kek {
			font-size: 50px;
			margin-top: 70px;
			margin-bottom: 50px;
		}

		.swag {
			font-size: 30px;
		}

		.btn-otmena {
			width: 40vw;
			height: 50px;
			background: #AF96DA;
			color: white;
			font-size: 24px;
			margin-top: 100px;
		}
	</style>
</head>
<body>
<div class="col">
		<div class="row">
			<h2 class="mx-auto kek"><?php
				if ($_SESSION['vhod']==1) {
					echo "Голос засчитан";
				}
				else echo "Голос убран";
			 ?></h2>
		</div>
		<div class="row mt-3">
			<img src="img/heart.svg" class="w-100 mx-auto">
		</div>
		<div class="row">
			<h2 class="mx-auto swag w-50 text-center">
				<?
				echo $stroka['pair'];
			?>
			</h2>
		</div>
		<div class="row">
			<div class="col">
				<form action="rm.php" method="GET" class="w-100">

						<?php
							echo '<input type="number" name="id" value="'.$_GET['id'].'" class="d-none">';
						?>
					<div class="row">
						<button class="btn mx-auto btn-otmena" type="submit">
							Убрать голос
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>
</body>
</html>