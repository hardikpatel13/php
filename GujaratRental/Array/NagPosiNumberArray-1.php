<?php

$balance = array(5000, -2000, 7000, -14000, 6000, -3000);

$p = 0;
$n = 0;

for ($i=0; $i < count($balance); $i++) 
{
	echo "<p>$balance[$i]</p>";

	if ($balance[$i] > 0) 
	{
		$p++;
	}

	else
	{
		$n++;
	}
}

echo "Possitive Value : $p<br>";
echo "Nagitive Value : $n";
?>