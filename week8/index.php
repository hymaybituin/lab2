<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            max-width: 600px;
            width: 100%;
        }
    </style>
    <title>PHP Code with Design</title>
</head>
<body>
    <div class="container">
        <?php
        echo "<h1>Wassup, its me Hans!</h1>";
        echo "<p>I'm still trying to know this kind of language, please bear with me <3.</p>";

        $name = "Hans Maybituin";
        $age = 20;

        echo "<h2>Quick Information:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";

        $floatNumber = 17.5;
        $intNumber = (int)$floatNumber;

        echo "<h2>Casting:</h2>";
        echo "<p>Original Float Number: $floatNumber</p>";
        echo "<p>Casted Integer Number: $intNumber</p>";

        $originalString = "Let's Go!";
        $modifiedString = strtoupper($originalString);

        echo "<h2>Strings:</h2>";
        echo "<p>Original String: $originalString</p>";
        echo "<p>Modified String: $modifiedString</p>";

        $marks = 65;
        $result = ($marks >= 60) ? "Pass" : "Fail";

        echo "<h2>Value Check:</h2>";
        echo "<p>Marks: $marks</p>";
        echo "<p>Result: $result</p>";
        ?>
    </div>
</body>
</html>
