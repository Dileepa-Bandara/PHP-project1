<?php
include "./include/connection.php";

if (isset($_GET["ID"])) {
    $id  = $_GET["ID"];

    $querry = "DELETE FROM signup WHERE id = $id";

    $result = mysqli_query($conn, $querry);

    if ($result) {
        header("Location:./insert.php?delete_success");
    } else {
        header("Location:./insert.php?delete_");
    }
}
