<?php

$a = 10;
$b = 20;

echo "Before Swapping:<br>";
echo "A = $a <br>";
echo "B = $b <br>";

// Swap using multiplication/division
$a = $a * $b;
$b = $a / $b;
$a = $a / $b;

echo "<br>After Swapping:<br>";
echo "A = $a <br>";
echo "B = $b <br>";

?>
