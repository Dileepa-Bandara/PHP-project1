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

    $localVariable = 12;


    function addition()
    {
        //echo $localVariable; we can't use this
        $localVariableTwo = 20;
    }

    // echo $localVariableTwo; we can't use this
    echo $localVariable;

    addition();


    ?>
</body>

</html>