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

    $webName = "Google Sri Lanka";
    $search = "Best places for visit & swimming";
    $result = "https://" . $webName . "?search=" . $search;

    //using url encoding
    $result1 = "https://" . urlencode($webName) . "?search=" . urlencode($search);
    //using rawurlencode
    $result2 = "https://" . rawurlencode($webName) . "?search=" . rawurlencode($search);

    echo $result;
    echo "</br>";
    echo $result1;
    echo "</br>";
    echo $result2;

    //correct way,usually rawurlencode method use for encode within domain name,urlencode use for encode within path,search
    $result3 = "https://" . rawurlencode($webName) . "?search=" . urlencode($search);
    echo "</br>";
    echo $result3;

    ?>

</body>

</html>