<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
		// for ($i=1; $i < ; $i++) 
		// { 
		// 	print("<li> $i </li>");
		// }


	$idno =1001;
	$firstname ="Kamalesh";
	$lastname ="Patel";
	$salary = 15000;
	$employee_name = "Raju";
	$ProductName = "Farari";
	$cityname = "naroda";


	echo "<b> Id No :</b> $idno <br/>";
	echo "<b> Employee Name :</b> $firstname $lastname <br/>";
	echo "<b>Employee Salary :</b> $salary <br/>";


	// echo "Idno " . $idno . " his name is " . $firstname . " " . $lastname;
	echo "Idno $idno his name is $firstname $lastname";

	echo "<h3>Salary : $salary</h3>";

	// $salary = $salary + 100;
	$salary += 1000;
	echo "<h3>Updated Salary : $salary</h3>"
	?>

</body>
</html>