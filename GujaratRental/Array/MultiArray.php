<?php

$mobile = array(
				'Oneplus' => array("Nord" => 30000, "Nord2" => 20000, "Nord3" => 40000), 
				'RealMe' => array("Narzo10" => 10000, "Narzo20" => 15000, "Narzo30" => 20000),
				'Redmi' => array("Note4" => 12000, "Note5" => 15000, "Note6" => 20000)
				);

$amount = 0;
echo "<ul>";
foreach ($mobile as $brand => $model) 
{	
	$total = 0;

	echo "<li>$brand</li>";
	
	echo "<ul>";
	foreach ($model as $key => $value) 
	{
		$total += $value;
		$amount += $value;
		echo "<li>$key : $value</li>";
	}

	echo "<li><b>Total Amount $total</b></li>";
	echo "</ul>";
}

echo "<h3>Total Stock Amount : $amount</h3>";
echo "</ul>";
?>