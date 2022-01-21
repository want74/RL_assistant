<?php
$d = getdate(); // использовано текущее время
foreach ( $d as $key => $val ) echo "$key = $val<br>";
$realHour = $d[hours]+6;
echo "<hr>сейчас: $realHour";
if ($realHour<12) {
	echo "завтрак";
}elseif ($realHour>11 && $realHour<16) {
	echo "обед";
}elseif ($realHour>15 && $realHour<25) {
	echo "ужин";
}
?>