<?php
//form validation
$emptyError = "";
if (isset($_POST["submit"])) {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($name || $email || $password)) {
        $emptyError = "***required***";
    }
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
        <fieldset style="width:450px">
            <legend style="color:red">Login Form</legend>
            <form action="form-validation.php" method="post">
                <label>Name :</label>
                </br>
                <input type="text" name="username" placeholder="Username">
                <h5 style="color:red"><?php echo "{$emptyError}" ?></h5>
                <br>

                <label>Email :</label>
                </br>
                <input type="email" name="email" placeholder="Email">
                <h5 style="color:red"><?php echo "{$emptyError}" ?></h5>
                <br>
                <br>
                <label>Password :</label>
                </br>
                <input type="password" name="password" placeholder="Password">
                <h5 style="color:red"><?php echo "{$emptyError}" ?></h5>
                <br>
                <br>
                <input type="submit" name="submit" value="Submit">



            </form>

        </fieldset>
    </div>
</body>

</html>