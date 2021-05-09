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

    function increment()
    {
        static $value = 1; //1
        echo $value . "</br>";

        $value++; //2 this will be the initial value of second function
    }



    increment();
    increment();
    increment();
    ?>
</body>

</html>