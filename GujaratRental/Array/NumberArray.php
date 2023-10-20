<?php

$idno = array(501, 502, 503);

// echo "$idno[0] = 1001";
// echo "$idno[1] = 1002";
// echo "$idno[2] = 1003";

// echo "Id No 1 : " . $idno[0] . "<br>";
// echo "Id No 2 : " . $idno[1] . "<br>";
// echo "Id No 3 : " . $idno[2] . "<br>";

$employee = array("Jignesh","Darshil","Shubh","Mayank","Gunjan");
$total = count($employee);

echo "Total Employee : $total <br><br>";

for ($i=0; $i < $total; $i++) 
{ 
	echo "Employee No : " .  ($i+1) . " And it's Name is " . $employee[$i] . "<br>";
}

?>