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

    //super global globals
    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";
    $x = 25;
    $y = 75;


    function addition()
    {
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
        //return $z; wec can't return global varibales to outside of scope 
    }

    addition();
    echo "Answer " . $z;

    ?>
</body>

</html>