<?php
$km = $_REQUEST['km'];
$mt = $km * 1000;
$feet = $mt * 3.33;
$inch = $feet * 12;
$cm = $mt * 100;
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
		echo "<p>Enter The Distance Between Two Cities In Kilomiter : $km</p>";

		echo "<ul>";
		echo "<li>Kilomiter : $km</li>";
		echo "<li>Meter : $mt</li>";
		echo "<li>Feet : $feet</li>";
		echo "<li>Inch : $inch</li>";
		echo "<li>Centimeter : $cm</li>";
		echo "</ul>";
	?>

</body>
</html>