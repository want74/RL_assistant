<?php 
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
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
			background: #FFFFFF;
			box-shadow: 0px 42px 86px rgba(91, 123, 181, 0.22), inset -9px 0px 6px rgba(0, 87, 255, 0.25), inset 8px 0px 6px rgba(255, 255, 255, 0.25);
			border-radius: 25px;
		}

		.kek {
			position: relative;
			top: -250px;
		}

		.cheburek {
			position: relative;
			top: -150px;
		}

		.fio {
			font-size: 26px;
		}
		.class {
			font-size: 18px;
		}

		.rowBorder {
			border-bottom: 1px solid #E1E1E1;
		}
	</style>
</head>
<body>
	<div class="col">
		<div class="row"><img src="img/aitalPIDR.svg" class="pidr w-100"></div>
		<div class="row">
			<div class="kek">
				<h2 class="text-white ml-4">QR-код для прохода в столовую</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-10 lol mx-auto">
				<div class="row">
					<div class="col-8 mx-auto mt-5">
						<?php   echo '<img class="w-100" src="qr.php?id='.$_SESSION['id'].'" />' ?>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-10 mx-auto">
						<div class="row">
							<p class="fio">
								<?php 
									echo  $stroka['fio'] 
								?>								
							</p>					
						</div>
						<div class="row mb-4">
							<p class="class">
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
		<div class="row">
			<div class="col-10 mx-auto cheburek">
				<div class="row">
					<div class="col">
						<p>История посещений</p>
					</div>
					<div class="col-3">
						<p>Всё</p>
					</div>
				</div>
				<div class="row rowBorder">
					<div class="col">
						<div class="row">
							<div class="col-4"><img src="img/morning.svg" class="w-100 mt-2"></div>
							<div class="col">
								<div class="row">
									<h3>Завтрак</h3>
								</div>
								<div class="row">
									<p>Декабрь 28,2021</p>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-3"><img src="img/quest.svg" class="w-75 mt-3 mx-auto"></div>
				</div>
			</div>
		</div>
	</div>
	
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>