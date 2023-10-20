<?php
$salary = $_REQUEST['salary'];
$usdlr = $salary / 82.94;
$ukpnd = $salary / 105.73;
$kwtdnr = $salary / 269.10;
$nplrs = $salary * 1.62;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
	echo "<p>Employee Salary In Indian Rupees : <b>$salary</b></p>";

	echo "<ul>";
	echo "<li>Us Dollar : <b>$usdlr</b></li>";
	echo "<li>Uk Pound : <b>$ukpnd</b></li>";
	echo "<li>Kuwait Dinar : <b>$kwtdnr</b></li>";
	echo "<li>Nepal Rupees : <b>$nplrs</b></li>";
	echo "</ul>";
	?>

</body>
</html>