<?php
$sub = array(89, 98, 65, 54, 99, 85, 98);
$total= count($sub);
$max=$sub[0];
$min=$sub[0];

echo "Total : $total <br>";

for ($i=0; $i < $total; $i++) 
{ 
	if ($max < $sub[$i]) 
	{
		$max = $sub[$i];
	}

	if ($min > $sub[$i]) 
	{
		$min = $sub[$i];
	}
}

echo "<p>Maximum is $max</p>";
echo "<p>Minimum is $min</p>";

?>
