<!DOCTYPE html>
<html>
<head>
    <title>Form Result</title>
</head>
<body>
    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data using $_POST
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // Display greeting and user information
        echo "<h2>Hello, $name!</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Age: $age</p>";

        // Check age condition
        if ($age >= 18) {
            echo "<p>You are eligible (18 or above).</p>";
        } else {
            echo "<p>You are not yet 18.</p>";
        }
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>
