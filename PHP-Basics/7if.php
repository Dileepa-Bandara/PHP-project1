<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    $number = 5;

    if ($number < 3) {
        echo "This first condition is true";
    } else if ($number == 5) {
        echo "This second condition is true";
    }

    //for loop
    echo "</br>";
    echo "For Loop</br>";
    for ($int = 0; $int < $number; $int++) {
        echo $int . "</br>";
    }
    //while loop
    echo "</br>";
    echo "While Loop</br>";
    $int = 0;
    while ($int  < $number) {
        echo $int . "</br>";
        $int++;
    }

    //for-each loop
    echo "</br>";
    echo "For each</br>";
    $schools = array("first" => "Bernadeth", "second" => "Mariya");

    foreach ($schools as $key => $value) {
        echo "{$key} is {$value} </br>";
    }
    ?>
</body>

</html>