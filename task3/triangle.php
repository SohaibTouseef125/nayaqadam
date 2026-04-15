<?php

echo "<h3>Pattern 1:</h3>";

// Pattern 1: Increasing Stars
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>---------------------<br>";

echo "<h3>Pattern 2:</h3>";

// Pattern 2: Decreasing Stars
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>---------------------<br>";

echo "<h3>Pattern 3:</h3>";

// Pattern 3: Numbers Triangle
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

?>
