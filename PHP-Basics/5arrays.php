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

    $colors = array("red", "green", "yellow");
    echo $colors[0] . "</br>";
    $colors[0] = "purple";
    echo $colors[0] . "</br>";
    echo "<pre>";
    print_r($colors);
    echo "</pre>";


    $names = array("Dileepa", "Lakmina", array("Nalaka", "Dissanayake"));
    echo $names[2][1] . "</br>";
    echo "</br>";

    //associative array
    $schools = array("first" => "St'Bernadeth", "second" => "St'Mary's", "third" => "St'Ann's");
    echo $schools["first"] . "</br>";
    echo "<pre>";
    print_r($schools);
    echo "</pre>";





    ?>
</body>

</html>