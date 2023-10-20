<?php
$time = "";
if (isset($_REQUEST['btnsubmit'])) 
	{
		$time = $_REQUEST['txttime'];
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
			Enter Current Time Value : <input type="text" name="txttime" value="<?php echo $time; ?>">
						<input type="submit" name="btnsubmit" value="Get Status">
		</p>
	</form>

	<?php
	if (isset($_REQUEST['btnsubmit'])) 
	{

		if ($time>=1 && $time<=24) 
		{
			echo "<p>Valid Time</p>";

			if ($time>=1 && $time<=12) 
			{
				echo "<p>Time : $time AM</p>";
				echo "<p>Massage : Good Morning</p>";
			}

			else 
			{
				echo "<p>Time : ". ($time-12) ." PM</p>";

				if ($time>=12 && $time<=15) 
				{
					echo "<p>Massage : Good Afternoon</p>";
				}

				else if ($time>=16 && $time<=20) 
				{
					echo "<p>Massage : Good Evening</p>";
				}

				else
				{
					echo "<p>Massage : Good Night</p>";
				}
			}
		}

		else
		{
			echo "<p>Invalid Time</p>";
		}
	}
	?>

</body>
</html>