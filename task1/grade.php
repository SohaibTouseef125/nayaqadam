<?php

$marks = 85;

switch (true) {
    case ($marks >= 90 && $marks <= 100):
        echo "Grade: A+";
        break;

    case ($marks >= 80 && $marks <= 89):
        echo "Grade: A";
        break;

    case ($marks >= 70 && $marks <= 79):
        echo "Grade: B";
        break;

    case ($marks >= 60 && $marks <= 69):
        echo "Grade: C";
        break;

    case ($marks >= 50 && $marks <= 59):
        echo "Grade: D";
        break;

    default:
        echo "Grade: Fail";
}
?>
