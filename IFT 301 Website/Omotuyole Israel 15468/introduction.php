<?php
echo "<h2>Welcome to My PHP Introduction Page!</h2>";

$name = "Israel Omotuyole";
$department = " Information Technology";
$course_title = "Web Application Development";

echo "<p><b>Name:</b> $name</p>";
echo "<p><b>Department:</b> $department</p>";
echo "<p><b>Course Title:</b> $course_title</p>";

$num1 = 12;
$num2 = 8;
$sum = $num1 + $num2;
echo "<p><b>Sum of $num1 and $num2 is:</b> $sum</p>";

if ($sum % 2 == 0) {
    echo "<p>The number $sum is <b>even</b>.</p>";
} else {
    echo "<p>The number $sum is <b>odd</b>.</p>";
}

echo "<p><b>Current Date and Time:</b> " . date("Y-m-d H:i:s") . "</p>";
?>


