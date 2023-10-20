<?php
$num1="";
$num2="";
$operator="";

if (isset($_REQUEST['btnsubmit'])) 
{
	$num1 = $_REQUEST['txtnumber1'];
	$num2 = $_REQUEST['txtnumber2'];
	$operator = $_REQUEST['operator'];
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
			Number 1 : <input type="text" name="txtnumber1" value="<?php echo $num1; ?>">
		</p>
		
		<p>
			Number 2 : <input type="text" name="txtnumber2" value="<?php echo $num2; ?>">
		</p>

		<p>
			Select Operator : <select name="operator">
									<option value="0">-Select One-</option>
									<option value="add" <?php if ($operator=='add'){echo "selected=\*selected\*";}?>>Addition</option>
									<option value="sub" <?php if ($operator=='sub'){echo "selected=\*selected\*";}?>>Subtraction</option>
									<option value="mul" <?php if ($operator=='mul'){echo "selected=\*selected\*";}?>>Multiply</option>
									<option value="div" <?php if ($operator=='div'){echo "selected=\*selected\*";}?>>Division</option>
									<option value="mod" <?php if ($operator=='mod'){echo "selected=\*selected\*";}?>>Modules</option>
							  </select>
		</p>

		<p>
				<input type="submit" name="btnsubmit" value="Get Calculation">
		</p>

	</form>

	<?php

	if (isset($_REQUEST['btnsubmit'])) 
	{
		$result=0;

		switch ($operator) 
		{
			case 'add':
				$result = $num1 + $num2;
				break;
			
			case 'sub':
				$result = $num1 - $num2;
				break;
			
			case 'mul':
				$result = $num1 * $num2;
				break;
			
			case 'div':
				$result = $num1 / $num2;
				break;
			
			case 'mod':
				$result = $num1 % $num2;
				break;
			
			default:
				$result = 0;
				break;
		}

		echo "<h2>Youe Operator Result is $result</h2>";
	}

	?>

</body>
</html>