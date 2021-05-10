<?php
require_once("./include/connection.php");
$error = "";
if (isset($_POST["submit"])) {
  if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["password"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $querry = "INSERT INTO signup (name,email,password)VALUES ('$name','$email','$password')";
    $result = mysqli_query($conn, $querry);
    if ($result) {
      echo "success";
    } else {
      echo "failed";
    }
  } else {
    $error = "Please enter your details";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="main.css" />
  <title>PHP and SQL</title>
</head>

<body>
  <div class="container">
    <div class="form">
      <fieldset>
        <legend>
          <h3>Form</h3>
        </legend>
        <form action="insert.php" method="post">
          <label for="name">Name :</label>
          <input type="text" placeholder="Name" name="name" /><span style="color:red"><?php echo $error; ?></span>
          <label for=" email">Email :</label>
          <input type="email" placeholder="Email" name="email" /><span style="color:red"><?php echo $error; ?></span>
          <label for=" password">Password :</label>
          <input type="password" placeholder="Password" name="password" /><span style="color:red"><?php echo $error; ?></span>
          <button type="submit" name="submit">Submit</button>
        </form>
      </fieldset>
    </div>
  </div>
</body>

</html>