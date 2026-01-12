<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Types</title>
</head>
<body>
    <?php
    // Declare variables of different types
    $integerVar = 100;                  
    $floatVar = 10.75;                 
    $stringVar = "Hello, Welcome to Redeemer's University!";        
    $booleanVar = true;                
    $arrayVar = array("Apple", "Banana", "Cherry");  

    // Display their types and values
    echo "<h2>Variable Types and Values using var_dump()</h2>";

    echo "<b>Integer:</b> ";
    var_dump($integerVar);
    echo "<br><br>";

    echo "<b>Float:</b> ";
    var_dump($floatVar);
    echo "<br><br>";

    echo "<b>String:</b> ";
    var_dump($stringVar);
    echo "<br><br>";

    echo "<b>Boolean:</b> ";
    var_dump($booleanVar);
    echo "<br><br>";

    echo "<b>Array:</b> ";
    var_dump($arrayVar);
    echo "<br>";
    <html>
<body>



</body>
</html>
