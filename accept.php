<?php
	session_start();
	include 'connect.php';
	$query = mysqli_query($con, "SELECT * FROM bals WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
 ?>
 <?php
 echo $stroka['pair'];
  ?>
  <form action="/rm.php" method="GET" >
	<div class="row">
		<?php
			echo '<input type="number" name="id" value="'.$_GET['id'].'" class="d-none">'
		 ?>
	</div>
	<div class="row">
	    <button class="btn mx-auto btn-otmena" type="submit">
	        Убрать голос
	    </button>
	</div>
</form>