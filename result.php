<?php
	include 'connect.php';
	$query = mysqli_query($con, "SELECT * FROM bals ORDER BY votes DESC");
	$stroka = $query->fetch_assoc();
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RLchik</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
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
        .ht1 {
            position: absolute;
            left: 1vw;
            top: 5vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht2 {
            position: absolute;
            left: 20vw;
            top: 25vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht3 {
            position: absolute;
            left: 10vw;
            top: 70vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht4 {
            position: absolute;
            left: 1vw;
            top: 45vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht5 {
            position: absolute;
            left: 70vw;
            top: 0vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht6 {
            position: absolute;
            left: 85vw;
            top: 20vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht7 {
            position: absolute;
            left: 65vw;
            top: 40vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht8 {
            position: absolute;
            left: 75vw;
            top: 60vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht9 {
            position: absolute;
            left: 45vw;
            top: 80vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht10 {
            position: absolute;
            left: 35vw;
            top: 3vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .ht11 {
            position: absolute;
            left: 30vw;
            top: 50vh;
            width: 20vh;
            height: 20vh;
            z-index: -1 !important;
        }
        .heart {
            width: 90vh;
            height: 90vh;
            background-image: url("img/heart.svg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            z-index: 2 !important;
        }
        .para {
            font-size: 50px;
            width: 60%;
            color: #C47E9C;
        }
        .votes {
            font-size: 44px;
            color: #C47E9C;
        }
    </style>
</head>
<body class="d-flex" style="height:100vh;">
    <div class="heart mx-auto my-auto d-flex">
        <div class="strok my-auto w-100">
            <p class="para text-center mx-auto">
			<?php echo $stroka['pair']; ?></p>
            <p class="votes text-center">
            	Голосов: <?php $stroka['votes'];?></p>
        </div>
    </div>
    </div>
    <img src="img/heart.svg" class="ht1">
    <img src="img/heart.svg" class="ht2">
    <img src="img/heart.svg" class="ht3">
    <img src="img/heart.svg" class="ht4">
    <img src="img/heart.svg" class="ht5">
    <img src="img/heart.svg" class="ht6">
    <img src="img/heart.svg" class="ht7">
    <img src="img/heart.svg" class="ht8">
    <img src="img/heart.svg" class="ht9">
    <img src="img/heart.svg" class="ht10">
    <img src="img/heart.svg" class="ht11">
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