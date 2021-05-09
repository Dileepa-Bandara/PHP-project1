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

    $names = array("red", "green", "yellow");
    echo array_pop($names) . "</br>";
    //echo $names . "</br>";we cant echo an array
    echo "<pre>";
    print_r($names);

    echo "</pre>";
    array_push($names, "yellow");
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    $numbers = array(1, 2, 3, 4, 5, 6);
    //count
    echo count($numbers) . "</br>";
    rsort($numbers);
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    //minimum value
    echo  min($numbers) . "</br>";

    //array => string
    echo implode(" ", $names);
    //string => array

    echo "</br>";
    echo "</pre>";
    print_r(explode(" ", "Dileepa Lakmina Bandara"));
    echo "<pre>";








    ?>

</body>

</html>