<?php

$balance = array(5000, -2000, 7000, -14000, 6000, -3000);
$total = count($balance);
$amount = 0;
$possitive = 0;
$nagitive = 0;

for ($i=0; $i < $total ; $i++) 
{ 
    $amount += $balance[$i];
}

echo "Total Balance : $amount";

for ($i=0; $i < $total ; $i++) 
{ 
    if ($i < $balance[$i]) 
    {
        $possitive += $balance[$i];
    }
    else
    {
        $nagitive += $balance[$i];
    }
}

echo "Possitive Balance is : $possitive";
echo "Nagitive Balance is : $nagitive";
?>