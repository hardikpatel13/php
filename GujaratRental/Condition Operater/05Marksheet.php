<?php
$sr = "";
$name = "";
$guj = "";
$mt = "";
$eng = "";
$hin = "";
$sci = "";
$ssc = "";
$sk = "";
$total ="";
$per ="";
if (isset($_REQUEST['btnsubmit'])) 
	{
		$sr = $_REQUEST['txtsr'];
		$name = $_REQUEST['txtname'];
		$guj = $_REQUEST['txtguj'];
		$mt = $_REQUEST['txtmt'];
		$eng = $_REQUEST['txteng'];
		$hin = $_REQUEST['txthin'];
		$sci = $_REQUEST['txtsci'];
		$ssc = $_REQUEST['txtssc'];
		$sk = $_REQUEST['txtsk'];
		
			$total = $guj + $mt + $eng + $hin + $sci + $ssc + $sk;
			$per = $total * 100/700;
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
			Sr No : <input type="text" name="txtsr" value="<?php echo $sr; ?>"> 
			Name : <input type="text" name="txtname" value="<?php echo $name; ?>"> <br>
			Gujarati : <input type="text" name="txtguj" value="<?php echo $guj; ?>">  
			Maths : <input type="text" name="txtmt" value="<?php echo $mt; ?>"> <br>
			English : <input type="text" name="txteng" value="<?php echo $eng; ?>"> 
			Hindi : <input type="text" name="txthin" value="<?php echo $hin; ?>"> <br>
			Science : <input type="text" name="txtsci" value="<?php echo $sci; ?>"> 
			Social Science : <input type="text" name="txtssc" value="<?php echo $ssc; ?>"> <br>
			Sanskrut : <input type="text" name="txtsk" value="<?php echo $sk; ?>"> 
		</p>

		<p>
			<input type="submit" name="btnsubmit" value="Get Result">
		</p>
	</form>

	<?php
	if (isset($_REQUEST['btnsubmit'])) 
	{

		if ($guj>=35 && $mt>=35 && $eng>=35 && $hin>=35 && $sci>=35 && $ssc>=35 && $sk>=35)
		{
			echo "<p>Congratulation ! Your Are Pass</p>";

			if ($per>=90) 
			{
				echo "<p>Grad : A+</p>";
			}

			else if ($per>=70) 
			{
				echo "<p>Grad : A</p>";
			}

			else if ($per>=50) 
			{
				echo "<p>Grad : B</p>";
			}

			else if ($per>=35)
			{
				echo "<p>Grad : C</p>";
			}

			else
			{
				echo "<p>Fail</p>";
			}
		}

		else
		{
			echo "<p>Sorry ! Your Are Fail</p>";
		}

		echo "<p>Total : $total</p>";
		echo "<p>Percentage : $per</p>";
	}

	?>

</body>
</html>