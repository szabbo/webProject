<?php

    if (isset($_POST['ckeditor-submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['editor']

        //mail
        $mailTo = "";
        $headers = "From: ".$emailFrom;
        $txt = "You have recived an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);

        header("Location: main.php?mailsend");
        exit();
    } else {
        header("Location: main.php?error");
        exit();
    }