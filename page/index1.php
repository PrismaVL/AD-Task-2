<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BASICS</title>
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>
<body>
    <h1>PHP BASICS</h1>
    
    <div class="container">
        <div class="box">
            <h2>1. Declarations</h2>
            
            <h3>Variables</h3>
            <pre>&lt;?php
$name = "John Doe";
$age = 30;
$price = 19.99;
$is_active = true;
?&gt;</pre>
            <div class="result">
                <?php
                $name = "John Doe";
                $age = 30;
                $price = 19.99;
                $is_active = true;
                echo "Name: $name<br>";
                echo "Age: $age<br>";
                echo "Price: $$price<br>";
                echo "Active: " . ($is_active ? 'Yes' : 'No');
                ?>
            </div>
            
            <h3>Arrays</h3>
            <pre>&lt;?php
$colors = ["Red", "Green", "Blue"];
$person = ["name" => "Alice", "age" => 25];
?&gt;</pre>
            <div class="result">
                <?php
                $colors = ["Red", "Green", "Blue"];
                $person = ["name" => "Alice", "age" => 25];
                echo "Colors: " . implode(", ", $colors) . "<br>";
                echo "Person: {$person['name']}, {$person['age']}";
                ?>
            </div>
        </div>
        
        <div class="box">
            <h2>2. Conditionals</h2>
            
            <h3>If-Else</h3>
            <pre>&lt;?php
$temp = 22;
if ($temp > 30) {
    echo "Hot!";
} elseif ($temp > 20) {
    echo "Pleasant!";
} else {
    echo "Cool!";
}
?&gt;</pre>
            <div class="result">
                <?php
                $temp = 22;
                if ($temp > 30) {
                    echo "Hot!";
                } elseif ($temp > 20) {
                    echo "Pleasant!";
                } else {
                    echo "Cool!";
                }
                ?>
            </div>
            <h3>Switch</h3>
            <pre>&lt;?php
$day = "Monday";
switch($day) {
    case "Monday":
        echo "Work week starts";
        break;
    case "Friday":
        echo "Weekend coming!";
        break;
    default:
        echo "Regular day";
}
?&gt;</pre>
            <div class="result">
                <?php
                $day = "Monday";
                switch($day) {
                    case "Monday":
                        echo "Work week starts";
                        break;
                    case "Friday":
                        echo "Weekend coming!";
                        break;
                    default:
                        echo "Regular day";
                }
                ?>
            </div>
        </div>
        
        <div class="box">
            <h2>3. Looping</h2>
            
            <h3>For Loop</h3>
            <pre>&lt;?php
for ($i = 1; $i <= 3; $i++) {
    echo "Count: $i&lt;br&gt;";
}
?&gt;</pre>
            <div class="result">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    echo "Count: $i<br>";
                }
                ?>
            </div>
            
            <h3>While Loop</h3>
            <pre>&lt;?php
$count = 1;
while ($count <= 3) {
    echo "Number: $count&lt;br&gt;";
    $count++;
}
?&gt;</pre>
            <div class="result">
                <?php
                $count = 1;
                while ($count <= 3) {
                    echo "Number: $count<br>";
                    $count++;
                }
                ?>
            </div>
        </div>
        <div class="box">
    <h2>4. Arrays, Dictionaries, Functions</h2>
    <h3>Code Example:</h3>
    <pre>&lt;?php
$dataHandler = [
    "array" =&gt; function () {
        $colors = ["Red", "Green", "Blue"];
        echo "Array Example:&lt;br&gt;";
        echo "Second color is: " . $colors[1];
    },
    "dictionary" =&gt; function () {
        $person = [
            "name" =&gt; "Alice",
            "age" =&gt; 28
        ];
        echo "Dictionary Example:&lt;br&gt;";
        echo "Name: {$person['name']}&lt;br&gt;";
        echo "Age: {$person['age']}";
    },
    "function" =&gt; function () {
        function greet($name) {
            return "Hello, " . $name;
        }
        echo "Function Example:&lt;br&gt;";
        echo greet("Bob");
    }
];

$index = 1; // 0 = array, 1 = dictionary, 2 = function
$keys = array_keys($dataHandler);
$dataHandler[$keys[$index]]();
?&gt;</pre>

    <h3>Code Output</h3>
    <div class="result">
        <?php
        $dataHandler = [
            "array" => function () {
                $colors = ["Red", "Green", "Blue"];
                echo "Array Example:<br>";
                echo "Second color is: " . $colors[1];
            },
            "dictionary" => function () {
                $person = [
                    "name" => "Alice",
                    "age" => 28
                ];
                echo "Dictionary Example:<br>";
                echo "Name: {$person['name']}<br>";
                echo "Age: {$person['age']}";
            },
            "function" => function () {
                function greet($name) {
                    return "Hello, " . $name;
                }
                echo "Function Example:<br>";
                echo greet("Bob");
            }
        ];

        $index = isset($_GET['index']) ? (int)$_GET['index'] : 0;
        $keys = array_keys($dataHandler);
        if ($index >= count($keys)) {
            $index = 0;
        }
        $dataHandler[$keys[$index]]();
        ?>

    </div>
    <div style="margin-top: 20px; text-align: center;">
        <button onclick="location.href='?index=<?php echo ($index + 1); ?>'">Next</button>
    </div>
</div>
    </div>
</body>
</html>