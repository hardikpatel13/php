<?php
$x = 123456;
$count = 0;

do 
{
	$count++;
	$x = floor($x/10);
} 
while ($x!=0);

echo "Total Digit : $count";
echo "<p>Another Code....</p>";
?>