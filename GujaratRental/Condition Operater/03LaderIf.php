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
			Enter Electccity Consumed Units : <input type="text" name="txtunit">
				<input type="submit" name="btnsubmit" value="Get Invoice Value">
		</p>

	</form>

	<?php
	if (isset($_REQUEST['btnsubmit'])) 
	{
		$units = $_REQUEST['txtunit'];
		$charges = 0;

		if ($units>=500) 
		{
			$charges = 10;
		}

		elseif ($units>=300 && $units<500) 
		{
			$charges = 7;
		}

		elseif ($units>=100 && $units<300) 
		{
			$charges = 5;
		}

		else
		{
			$charges = 2;
		}

		$amount = $units * $charges;
		$surcharges = $amount * 20/100;
		$netamount = $amount + $surcharges;

		echo "<p>Your Consumed units : <b>$units</b></p>";
		echo "<p>Per Units charges : <b>$charges</b></p>";
		echo "<p>Total Amount : <b>$amount</b></p>";
		echo "<p>Surcharges (20%) : <b>$surcharges</b></p>";
		echo "<h2>Your Net Payble : $netamount</h2>";
	}
	?>

</body>
</html>