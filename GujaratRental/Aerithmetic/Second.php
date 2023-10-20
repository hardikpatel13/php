<?php
$n1 = $_REQUEST['num1'];
$n2 = $_REQUEST['num2'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is First Page</title>
</head>
<body>

	<h2>All 5 Aerithmetic Opertion</h2>

	<?php
	echo "<p>Number 1 : $n1</p>";
	echo "<p>Number 2 : $n2</p>";

	echo "<hr>";

	echo "<ul>";
	echo "<li>Addition : " . ($n1+$n2) . "</li>";
	echo "<li>Division : " . ($n1-$n2) . "</li>";
	echo "<li>Multiply : " . ($n1*$n2) . "</li>";
	echo "<li>Division : " . ($n1/$n2) . "</li>";
	echo "<li>Modules  : " . ($n1%$n2) . "</li>";
	echo "</ul>";
	?>

</body>
</html>