<?php 
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
$query1 = mysqli_query($con, "SELECT * FROM history WHERE user_id='{$_SESSION['id']}'");
$stroka = $query->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/site.webmanifest">
	<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>RLchik</title>
	
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
			<img src="img/LOGO.svg" class="w-50 ml-4">
			</div>
		</div>
		<div class="row">
			<div class="col-10 lol mx-auto">
				<div class="row">
					<div class="col-11 mx-auto mt-5">
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
					</div><!-- Пока заморозил
					<div class="col-3">
						<p>Всё</p>
					</div>-->
				</div>
				<?php
            	for($i=0;$i<3;$i++){
            	$stroka1 = $query1->fetch_assoc();
            	
        	?>
				<div class="row rowBorder">
					<div class="col">
						<div class="row">
							<div class="col-3"><img src="img/morning.svg" class="w-100 mt-2"></div>
							<div class="col-4 ml-auto">
								<div class="row">
									<h3>
										<?php 
											if ($stroka1['type']==1) {
												echo "Завтрак";
											}elseif ($stroka1['type']==2) {
												echo "Обед";
											}elseif ($stroka1['type']==3) {
												echo "Ужин";
											}
										 ?>
									</h3>
								</div>
								<div class="row">
									<p>
										<?php 
											echo $stroka1['day1'];
										 ?>
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	

	<!--чтобы заменить цвет svg на заменить значение атрибута fill-->
	<nav class="navbar navbar-light bg-white fixed-bottom" style="height:10vh;box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);">
		<div class="col d-flex">
			<a href="main.php" class="mx-auto">
				<svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 60 60" fill="none" version="1.1" id="svg31" sodipodi:docname="home.svg" inkscape:version="1.1.1 (3bf5ae0d25, 2021-09-20)">
			  <sodipodi:namedview id="namedview33" pagecolor="#505050" bordercolor="#eeeeee" borderopacity="1" inkscape:pageshadow="0" inkscape:pageopacity="0" inkscape:pagecheckerboard="0" showgrid="false" inkscape:zoom="11.313709" inkscape:cx="28.947184" inkscape:cy="38.22796" inkscape:window-width="1920" inkscape:window-height="1001" inkscape:window-x="-9" inkscape:window-y="-9" inkscape:window-maximized="1" inkscape:current-layer="svg31"/>
			  <defs id="defs29">
			    <clipPath id="clip0_204_1595">
			      <rect width="60" height="60" fill="white" id="rect26"/>
			    </clipPath>
			  </defs>
			  <path style="fill:#6D5FFD;stroke-width:0.0805369;fill-opacity:1" d="M 7.5704698,37.450469 V 22.471407 L 3.8655106,22.450469 0.1605513,22.42953 15.033482,11.275168 C 23.213593,5.1402685 29.948526,0.12080537 30,0.12080537 c 0.08856,0 29.851449,22.28277963 29.813534,22.32069463 -0.0099,0.0099 -1.611864,-0.03306 -3.560021,-0.09536 -1.948157,-0.0623 -3.605526,-0.114326 -3.683043,-0.115615 -0.133736,-0.0022 -0.14094,0.769537 -0.14094,15.098329 V 52.42953 H 44.979866 37.530201 V 44.939597 37.449664 H 30 22.469799 v 7.489933 7.489933 H 15.020134 7.5704698 Z" id="path1322"/>
			  <path style="fill:#6D5FFD;fill-opacity:1;stroke-width:0.0805369;stroke:none;stroke-opacity:1" d="M 7.5704698,37.46131 V 22.493091 l -0.5436242,-0.05134 c -0.2989933,-0.02824 -1.9358644,-0.0516 -3.6374914,-0.05191 L 0.29548692,22.389262 10.355797,14.843294 C 19.273406,8.1544365 28.445694,1.3020528 29.601225,0.46552319 l 0.406594,-0.29434766 1.647097,1.21959117 c 5.850187,4.3317639 27.951821,20.9353813 27.915775,20.9714283 -0.02419,0.02419 -1.604396,-0.0023 -3.51157,-0.0589 -1.907174,-0.05658 -3.494979,-0.07549 -3.528456,-0.04202 -0.03348,0.03347 -0.07021,6.835025 -0.08163,15.114557 L 52.428275,52.42953 H 44.979238 37.530201 V 44.939597 37.449664 H 30 22.469799 v 7.489933 7.489933 H 15.020134 7.5704698 Z" id="path1435"/>
			  <g inkscape:groupmode="layer" id="layer1" inkscape:label="Layer 1"/>
				</svg>
			</a>
  		</div>
  		<div class="col d-flex">
  			<a href="acc.php" class="mx-auto">
  				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 60 60" fill="none">
					<path d="M30 0C21.75 0 15 8.4 15 18.75C15 29.1 21.75 37.5 30 37.5C38.25 37.5 45 29.1 45 18.75C45 8.4 38.25 0 30 0ZM14.325 37.5C6.375 37.875 0 44.4 0 52.5V60H60V52.5C60 44.4 53.7 37.875 45.675 37.5C41.625 42.075 36.075 45 30 45C23.925 45 18.375 42.075 14.325 37.5Z" fill="#A5ABB3"/>
				</svg>
  			</a>			
  		</div>
	</nav>
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>