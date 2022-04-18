<?php
$d = getdate(); // использовано текущее время
foreach ( $d as $key => $val ) echo "$key = $val<br>";
$realHour = $d[hours];
echo "<hr>сейчас: $realHour";
if ($realHour<7) {
	echo "завтрак";
}elseif ($realHour>6 && $realHour<9) {
	echo "обед";
}elseif ($realHour>10 && $realHour<15) {
	echo "ужин";
}
?> 