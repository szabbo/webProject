<?php
    require "dbh.inc.php";

    $editorContent = $statusMsg = '';

    if (isset($_POST['editor'])) {
        $editorContent = $_POST['editor'];

        //inserting data to db
        $sql = "INSERT INTO notifications (notificationContent) VALUES ('$editorContent')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: ../notifications.php");
            exit();
        } else {
            echo "error while adding to db!";
        }
    }