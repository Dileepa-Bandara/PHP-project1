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
        global $localVariable; //converting local scope variable to global
        echo $localVariable; // we can use this
        //  $localVariableTwo = 20;
    }
    //we can't convert as global if we define variable in a scope
    // global $localVariableTwo;
    // echo $localVariableTwo;

    addition();


    ?>
</body>

</html>