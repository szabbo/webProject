<?php
    require "dbh.inc.php";

    $sql = "DELETE FROM notifications WHERE notificationId='$_GET[id]'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/notifications.php");
        exit();
    } else {
        echo "Please contact your administrator ASAP!";
    }

?>