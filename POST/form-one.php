<?php


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "Dileepa" && $password == "dileepa") {
        echo "<h3>Welcome {$username}</h3>";
    } else {
        echo "<h3>Username or Password Invalid </h3>";
    }
} else {
    echo "<h3>Enter Your Password and UserName</h3>";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="margin:100px auto;padding:10px;display:flex;justify-content:center;align-content:center">
        <fieldset>
            <legend>Login Form</legend>
            <form action="form-one.php" method="post">
                <label>Name :</label>
                <input type="text" name="username" placeholder="Username">
                <br>
                <br>
                <br>
                <label>Password :</label>
                <input type="password" name="password" placeholder="Password">
                <br>
                <br>
                <input type="submit" name="submit" value="Submit">



            </form>

        </fieldset>
    </div>
</body>

</html>