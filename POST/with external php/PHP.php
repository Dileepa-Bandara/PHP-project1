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
