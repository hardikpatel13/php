<?php
$salary = "";
if (isset($_REQUEST['btnsubmit'])) 
	{
		$salary = $_REQUEST['salary'];
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
			Salary : <input type="text" name="salary">
			<input type="submit" name="btnsubmit" value="Get Salary">
		</p>
		
	</form>

	<?php
	if (isset($_REQUEST['btnsubmit'])) 
	{
		$salary = $_REQUEST['salary'];
		$bonus = 0;

		if ($salary>=10000) 
		{
			$bonus = $salary * 10/100;
		}

		$net = $salary + $bonus;

		echo "<p>Basic Salary : $salary</p>";
		echo "<p>Bonus : $bonus</p>";
		echo "<p>Net Salary : $net</p>";
	}
	?>

</body>
</html>