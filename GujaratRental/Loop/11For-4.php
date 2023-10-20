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
	for ($y=1; $y<=10; $y++) 
	{ 
	 	echo  $x . " " . $y . " " . ($x*$y) . "<br>";
	} 
}
?>

</body>
</html>