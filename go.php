<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<style>
		body {
			background: #F5F5F5;
		}

		.header {
			color: #6D5FFD;
			text-align: center;
		}

		.num {
			font-style: normal;
			font-weight: normal;
			font-size: 14px;
			height: 10px;
		}

		.kek {
			box-shadow: 0px 42px 86px rgba(91, 123, 181, 0.22), inset -9px 0px 6px rgba(0, 87, 255, 0.25), inset 8px 0px 6px rgba(255, 255, 255, 0.25);
			border-radius: 25px;
		}

		.input {
			border: 1px solid #A5ABB3;
			border-radius: 10px;
			background: none;
		}

		.btn-go {
			background: #7F76DF;
			color: white;
		}

		.forget {
			color: #7F76DF;
			font-size: 10px;
		}

		.lol {
			position: relative;
			top: -250px;
		}
	</style>
</head>

<body>
	<div class="d-flex">
		<div class="col">
			<div class="row"><img src="img/aitalPIDR.svg" class="pidr w-100"></div>
			<div class="row lol">
				<div class="col-11 mx-auto kek bg-white" style="margin-top: 40%;">
					<div class="row mt-5">
						<div class="col-6 mx-auto">
						<img src="img/LOGOdark.svg" class="w-100">
						</div>
					</div>
					<div class="row pb-4">
						<form action="check.php" method="post" class="w-100">
							<div class="col-9 mx-auto">
								<div class="row">
									<div class="col">
										<div class="row">
											<p class="num ml-3">Номер</p>
										</div>
										<div class="row"><input type="number" class="form-control input" name="num"
												placeholder="89992111111">
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<div class="row">
											<p class="num ml-3">Пароль</p>
										</div>
										<div class="row"><input type="password" class="form-control input" name="pass"
												placeholder="Пароль">
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-6 mx-auto">
										<div class="row"><button class="btn btn-go w-100">Войти</button></div>
										<div class="row">
											<a href="#" class="forget mx-auto" onclick="tutor()">Забыли пароль?</a>
										</div>
									</div>
								</div>
								<div class="row mt-4 tutor1" style="display: none;">
									<div class="col mx-auto">
										Сообщите тьютору и вам выдадут новый пароль или распишитесь на бумаге.
									</div>
								</div>

								<?php
						if ($_GET['error']) {
							echo '<div class="row mt-4"><div class="col">Неверный номер или пароль.</div><div>';
						}						
						?>
							</div>
						</form>
					</div>
				</div>
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

	<script>
		let tutor1 = document.querySelector(".tutor1");

		function tutor() {
			tutor1.style.display = "block"
		}
	</script>
</body>

</html>

<!---<form action="check.php" method="POST" class="w-100">						
  						<input type="text" class="form-control e-mail mx-auto" placeholder="Email" name="email">
  						<input type="text" class="form-control e-mail mx-auto mt-4" placeholder="Password" name="password">
  						<p class="forgotPass mt-1">Забыли пароль?</p>
  						<div class="row">
  							<button class="btn btn-signIn mx-auto">
	  							Войти
	  						</button>	
  						</div>  						
					</form>-->