<?php
    require "dbh.inc.php";

    $sql = "DELETE FROM users WHERE userId='$_GET[id]'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/editMembers.php");
        exit();
    } else {
        echo "Please contact your administrator ASAP!";
    }