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
    //setting cookie


    // $ExpireTime = time() + 86400; //current time+ 1day in seconds

    // setcookie("Name", "Cookie Content", $ExpireTime);
    // echo $_COOKIE["Name"];



    //unset cookie
    $ExpireTime_unset = time() - 86400;
    setcookie("Name", "Cookie Content", $ExpireTime_unset);
    echo $_COOKIE["Name"]; //showing error becouse unset previous cookie



    echo "GLOBAL SESSION  Value created in session file </br>";
include "./session.php";
    echo $_SESSION["Name"];
    //echo $Name; //we cant import locsl variable as same as the SESSION global variable to one file to another file
    ?>
</body>

</html>