<?php

$productname = array("Mouse" => 600, "Speaker" => 1500, "LED" => 20000, "SSD" => 1000);
$amount = 0;


foreach ($productname as $key => $value) 
{
	$amount += $value;
	echo "$key : $value <br>";
}

echo "<p>Total Payble Amount : <b>$amount</b></p>";

?>

