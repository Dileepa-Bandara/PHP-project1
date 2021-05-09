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

    $integer = 3;
    $decimal = 4.12;

    echo "ceil {$decimal} is : " . ceil($decimal) . "</br>";

    echo "floor {$decimal} is : " . floor($decimal) . "</br>";
    //true=1,flase=blank
    echo "is integer {$integer} ? : " . is_int($integer) . "</br>";
    echo "is integer {$decimal} ? : " . is_int($decimal) . "</br>";

    echo "{$integer} integer to binary " . decbin($integer) . "</br>";
    echo "11 binary to integer " . bindec(11) . "</br>";
    echo "square root of 64 is " . sqrt(64) . "</br>";
    echo "10 to the power 2 is " . pow(10, 2) . "</br>";


    ?>
</body>

</html>