<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username">
    <input type="password" name="pwd">
    <button>Signup</button>
</form>

<?php
    require_once 'Classes/Car.php';

    $car01 = new Car("BMW", "Red");

    $car01->setColor("Purple");
    echo $car01->getColor();
?>
    
</body>
</html>