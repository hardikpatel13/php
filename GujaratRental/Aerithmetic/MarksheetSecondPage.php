<?php
$srno = $_REQUEST['srno'];
$name = $_REQUEST['name'];
$guj = $_REQUEST['guj'];
$mth = $_REQUEST['mth'];
$sci = $_REQUEST['sci'];
$eng = $_REQUEST['eng'];
$hin = $_REQUEST['hin'];
$total = $guj + $mth + $sci + $eng + $hin;
$per = $total*100/500;
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
	echo "<p>Sr No : $srno</p>";
	echo "<p>Name : $name</p>";
	echo "<p>Gujarati : $guj</p>";
	echo "<p>Maths : $mth</p>";
	echo "<p>Science : $sci</p>";
	echo "<p>English : $eng</p>";
	echo "<p>Hindi : $hin</p>";

	echo "<ul>";
	echo "<li>Total : $total</li>";
	echo "<li>Persentage : $per</li>";
	echo "</ul>";
	?>

</body>
</html>