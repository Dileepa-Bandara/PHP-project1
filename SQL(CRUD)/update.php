<?php
include "./include/connection.php";
$idGet = "";

if (isset($_GET["ID"])) {
  $idGet = $_GET["ID"];
  $querry = "SELECT * FROM signup WHERE id = {$_GET["ID"]}";
  $result = mysqli_query($conn, $querry);

  if ($result) {
    if ($user = mysqli_fetch_assoc($result)) {
      $name = $user["name"];
      $email = $user["email"];
      $password = $user["password"];
    }
  }
  if (isset($_POST["submit"])) {
    if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["password"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $query  = "UPDATE signup SET name=' $name',email='$email', password = '$password'  LIMIT 1 ";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo "update success";
        header("Location:./insert.php?success_update");
      } else {
        echo "failed.";
        header("Location:./insert.php?failed_update");
      }
    }
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
      <h1>Edit Page</h1>
      <fieldset>
        <legend>
          <h3>Form</h3>
        </legend>
        <form action="update.php?ID=<?php $_GET["ID"] ?>" method="post">
          <label for="name">Name :</label>
          <input type="text" placeholder="Name" name="name" value="<?php echo "{$name}"; ?>" /><span style="color:red"><?php  ?></span>
          <label for=" email">Email :</label>
          <input type="email" placeholder="Email" name="email" value="<?php echo "{$email}"; ?>" /><span style="color:red"><?php  ?></span>
          <label for=" password">Password :</label>
          <input type="password" placeholder="Password" name="password" value="<?php echo "{$password}"; ?>" /><span style="color:red"><?php ?></span>
          <button type="submit" name="submit">Submit</button>
        </form>
      </fieldset>
    </div>
    <div class="table">

    </div>
  </div>
</body>

</html>