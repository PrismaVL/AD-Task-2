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
    </div>
</body>
</html>