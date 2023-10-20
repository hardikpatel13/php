<?php
$x = "";

if (isset($_REQUEST['btnsubmit'])) 
{
	$x = $_REQUEST['txtnum'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="" method="post">
		<p>
			Enter Any Number : <input type="text" name="txtnum" value="<?php echo $x; ?>">
							<input type="submit" name="btnsubmit" value="Get Fraction calculator">
		</p>
	</form>

<?php

if (isset($_REQUEST['btnsubmit'])) 
{
	echo "<pre>";
	echo "Number 	Square 	 cube";
	echo "<hr>";
	$y = 1;

	while ($y<=10) 
	{
		echo $x . "	" . ($y) . " 	" . ($x*$y) . "<br>";

		$y++;
	}

}

echo "</pre><p>Loop Finished....</p>";
?>

</body>
</html>