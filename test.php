<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>RLchik</title>
</head>

<body>
	<div class="col">
		<div class="row">
			<h1 class="mx-auto">Добро пожаловать в тех. зону!</h1>
		</div>
		<div class="row">			
			<form action="fio.php" method="POST">
				Поменять чьё-то ФИО. Введите его номер телефона.
				<input type="number" placeholder="89992111111" name="num">
				Желаемое ФИО
				<input type="text" placeholder="ФИО" name="fio">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="num.php" method="POST">
				Поменять чей-то номер по ФИО. Введите его ФИО.
				<input type="text" placeholder="ФИО" name="fio">
				Желаемый номер
				<input type="number" placeholder="89992111111" name="num">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="num1.php" method="POST">
				Поменять чей-то номер по ID. Введите его ID.
				<input type="text" placeholder="ID" name="id">
				Желаемый номер
				<input type="number" placeholder="89992111111" name="num">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="pass.php" method="POST">
				Поменять чей-то пароль. Введите его номер телефона
				<input type="number" placeholder="89992111111" name="num">
				Желаемый пароль
				<input type="text" placeholder="Пароль" name="pass">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="grade.php" method="POST">
				Поменять чьё-то число класса. Введите его номер телефона
				<input type="number" placeholder="89992111111" name="num">
				Желаемое число
				<input type="number" placeholder="10" name="gradeOfClass">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="class.php" method="POST">
				Поменять чье-то направление класса. Введите его номер телефона
				<input type="number" placeholder="89992111111" name="num">
				Пишите сокращённо желаемый класс. Пример:гк,политех,рн,фм,инж,бх,гум
				<input type="text" placeholder="политех" name="class">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="history.php" method="GET">
				Изменить чью-то история посещений столовой. Введите его ID(Он на странице с аккаунтом)
				<input type="number" placeholder="ID" name="user_id">
				<button class="btn btn-outline-success">yep</button>
			</form>
		</div>
		<div class="row">			
			<form action="reg.php" method="POST">
				Создать новый аккаунт. Введите номер телефона
				<input type="number" placeholder="89992111111" name="num">
				<input type="text" placeholder="ФИО" name="fio">
				<input type="text" placeholder="Пароль" name="password">
				<input type="number" placeholder="Число класса.Напр.:10" name="gradeOfClass">
				<input type="text" placeholder="гк,политех,рн,фм,инж,бх,гум" name="class" style="width: 250px;">
				<button class="btn btn-outline-success">yep</button>
			</form>
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