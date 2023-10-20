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
			English : <input type="text" name="txteng">
					  <input type="submit" name="btnsubmit" value="Get Result">
		</p>

	</form>

<?php
if (isset($_REQUEST['btnsubmit'])) 
{
	$english = $_REQUEST['txteng'];

	if ($english>=35) 
	{
		echo "<h2 style=\"color: green;\">Congratulation ! Your Are Pass</h2>";
	}

	else
	{
		echo "<h2 style=\"color: red;\">Sorry ! Your Are Fail</h2>";
	}
}
?>

</body>
</html>