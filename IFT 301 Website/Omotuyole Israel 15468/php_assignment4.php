<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 4</title>
</head>
<body>
    <?php
    // Store the student's score
    $score = 79; 

    // Check the score and print the appropriate message
    if ($score >= 70) {
        echo "Excellent";
    } elseif ($score >= 50 && $score <= 69) {
        echo "Good";
    } else {
        echo "Fail";
    }
    ?>

</body>
</html>

<?php


