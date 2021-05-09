<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>File Two</h1>
    <?php
    echo "<pre>";

    print_r($_GET);

    echo "<pre>";




    ?>
    <h2><?php echo $_GET["Name"] ?></h2>
    <h2><?php echo $_GET["Job"] ?></h2>
</body>

</html>