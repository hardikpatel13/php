<?php
$gb = $_REQUEST['gb'];
$mb = $gb * 1024;
$kb = $mb * 1024;
$bytes = $kb * 1024;
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
	echo "<p>Enter File Size In GB : $gb </p>";

	echo "<ul>";
	echo "<li>Mega Bytes : $mb</li>";
	echo "<li>Kilo Bytes : $kb</li>";
	echo "<li>Bytes : $bytes</li>";
	echo "</ul>";
	?>

</body>
</html>