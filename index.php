<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['clicked'])) {
        header("Location: page/index1.php");
        exit();}

    $firstName = "PHP";
    $lastName = "BASICS";
    $fullName = $firstName . " " . $lastName;
    ?>

    <div class="screen" onclick="window.location.href='?clicked=true'">
        <h1>WELCOME TO <span class='highlight'><?php echo htmlspecialchars($fullName); ?></span></h1>
    </div>

</body>
</html>