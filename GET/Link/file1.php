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
    $name = "Dileepa";
    $job = "Software Developer";
    ?>
</body>

<a href="./file2.php?Name=<?php echo urlencode($name); ?>&Job=<?php echo urlencode($job); ?>">Link1</a>

</html>