<?php
echo "<pre>";
echo "Number 	Square 		Cube";
echo "<hr>";
$x = 1;

while ($x<=10) 
{
	echo $x . "	 " . ($x*$x) . "		" . ($x*$x*$x) . "<br>";

	$x++;
}

echo "</pre><p>Loop Finished.....$x</p>";
?>