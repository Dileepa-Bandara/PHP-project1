<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <ul>
      <li><a href="index.php?Page=Home.php">Home</a></li>
      <li><a href="index.php?Page=About.php">About</a></li>
      <li><a href="index.php?Page=Contacts.php">Contacts</a></li>
    </ul>
  </div>

  <div class="content" style="padding: 20px">
    <?php

    if (!empty($_GET["Page"])) {


      $page = $_GET["Page"];
      // echo "<h2>$page</h2>";

      //name of pages folder
      $pages_directory = "pages";

      //access every file of pages directory up to bottom(0),an it return array of all files names
      $pages_folder = scandir($pages_directory, 0);

      echo "<pre>";
      print_r($pages_folder);
      echo "</pre>";

      //remove unwanted elements in returned array
      unset($pages_folder[0], $pages_folder[1]);
      echo "<pre>";
      print_r($pages_folder);
      echo "</pre>";

      //if this array has any file that stored in $page
      if (in_array($page, $pages_folder)) {
        //include that file
        include($pages_directory . "/" . $page);
      } else {
        echo "</h2>OOPS....NOT FOUND </h2>";
      }
    }

    ?>

  </div>
</body>

</html>