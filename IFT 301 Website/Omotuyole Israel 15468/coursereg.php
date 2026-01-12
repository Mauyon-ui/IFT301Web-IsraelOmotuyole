<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $courseUnits = array(
        "IFT301" => 2,
        "IFT303" => 2,
        "IFT309" => 2,
        "IFT311" => 2,
        "IFT323" => 2,
        "IFT343" => 2,
        "CSC307" => 3,
        "ICT305" => 3,
        "FIC301" => 2,
        "GIT313" => 0,
        "IFT355" => 2,
        "IFT353" => 2
    );

    $studentName = $_POST["studentName"];
    $matricNumber = $_POST["matricNumber"];

    if (isset($_POST["courses"])) {
        $selected = $_POST["courses"];
        $totalUnits = 0;

        foreach ($selected as $course) {
            if (isset($courseUnits[$course])) {
                $totalUnits += $courseUnits[$course];
            }
        }

        echo "<div style='margin:20px auto; 
              width:480px; 
              padding:15px; 
              background: #fff; 
              border-radius:10px; 
              text-align:center;'>";

        echo "<h3>Student Name: $studentName</h3>";
        echo "<h3>Matric Number: $matricNumber</h3>";
        echo "<h3>Total Units Registered: $totalUnits</h3>";

        if ($totalUnits >= 15 && $totalUnits <= 25) {
            echo "<h2 style='color:green;'>Welcome! Registration successful.</h2>";
        } else {
            echo "<h2 style='color:red;'>Invalid course selection. You must register between 15 and 25 units.</h2>";
        }

        echo "</div>";

    } else {
        echo "<h2 style='text-align:center; color:red;'>No course selected. Please choose your courses.</h2>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Course Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            padding: 30px;
        }
        .container {
            width: 480px;
            padding: 20px;
            background-image: linear-gradient(to right, #ffc371, #ff5f6d);
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #000;
            background: #fff;
            border-radius: 15px;
            padding: 10px;
        }
        .input-field {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #fff;
            color: #000;
            border: none;
            border-radius: 8px;
            margin-top: 15px;
            cursor: pointer;
        }
        button:hover {
            background: #272424;
            color: #fff;
        }
        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 10px;
            overflow: hidden;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tbody{
            color: #000;
        }
        thead{
            background-image: linear-gradient(to right, #ffc371, #ff5f6d);
            color: #fff;
        }
        .units-box {
            margin-top: 15px;
            background: white;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Course Registration Form</h2>

    <form method="POST">

        <label><b>Student Name:</b><br>
            <input type="text" class="input-field" name="studentName" required value="">
        </label>
        <br><br>

        <label><b>Matric Number:</b><br>
            <input type="text" class="input-field" name="matricNumber" required value="">
        </label>
        <br><br>

        <p><b>Select Your Courses:</b></p>

        <table>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Unit</th>
                            <th>Select Course</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>IFT 301</td>
                            <td>Web Application Development</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT301"></td>
                        </tr>

                        <tr>
                            <th>2</th>
                            <td>IFT 303</td>
                            <td>Web Development using Content Management Systems</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT303"></td>
                        </tr>

                        <tr>
                            <th>3</th>
                            <td>IFT 309</td>
                            <td>Ethics and Legal Issues in IT</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT309"></td>
                        </tr>

                        <tr>
                            <th>4</th>
                            <td>IFT 311</td>
                            <td>Mobile Application Development</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT311"></td>
                        </tr>

                        <tr>
                            <th>5</th>
                            <td>IFT 323</td>
                            <td>IT Innovation and Entrepreneurship</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT323"></td>
                        </tr>

                        <tr>
                            <th>6</th>
                            <td>IFT 343</td>
                            <td>Network Servers and Infrastructures</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT343"></td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>CSC 307</td>
                            <td>Operating Sytems</td>
                            <td>3</td>
                            <td><input type="checkbox" name="courses[]" value="CSC307"></td>
                        </tr>

                        <tr>
                            <th>8</th>
                            <td>ICT 305</td>
                            <td>Data Communication Systems and Network</td>
                            <td>3</td>
                            <td><input type="checkbox" name="courses[]" value="ICT305"></td>
                        </tr>

                        <tr>
                            <th>9</th>
                            <td> FIC 301</td>
                            <td>Theology of Science and Innovation</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="FIC301"></td>
                        </tr>

                        <tr>
                            <th>10</th>
                            <td>GIT 313 </td>
                            <td>Cisco Certified Network Associate</td>
                            <td>0</td>
                            <td><input type="checkbox" name="courses[]" value="GIT313"></td>
                        </tr>

                        <tr>
                            <th>11</th>
                            <td>IFT 355</td>
                            <td>Database Programming</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT355"></td>
                        </tr>

                        <tr>
                            <th>12</th>
                            <td>IFT 353</td>
                            <td>Software Defined Networks</td>
                            <td>2</td>
                            <td><input type="checkbox" name="courses[]" value="IFT353"></td>
                        </tr>                        
                    </tbody>
                </table>

        <button type="submit">Submit Registration</button>
    </form>
</div>
</body>
</html>
