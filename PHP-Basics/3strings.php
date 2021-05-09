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

    //concatenating string
    $str1 = "Dileepa";
    $str2 = "Lakmina";

    $concat = $str1 . " " . $str2;
    echo $concat;
    echo "</br>";
    echo "My name is " . $str1;

    $str3 = "red";
    $str4 = "flower";

    $combine = $str3;
    echo "</br>";
    $combine .= " " . $str4;
    echo $combine;


    //string methods
    echo "</br>";
    echo ucwords($combine);
    echo "</br>";
    echo ucfirst($combine);
    echo "</br>";
    echo strtolower($combine);
    echo "</br>";
    echo strtoupper($combine);
    echo "</br>";
    echo strpos($combine, "flow");
    echo "</br>";
    echo strchr($combine, 'f');

    echo "</br>";

    ?>
</body>

</html>