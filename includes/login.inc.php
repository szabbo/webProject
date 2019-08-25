<?php

    if (isset($_POST['login-submit'])) {
        require 'dbh.inc.php';

        $email = $_POST['userEmail'];
        $pass = $_POST['userPassword'];

        if (empty($email) || empty($pass)) {
            header("Location: ../pages/login.php?error=emotyFields");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE username=? OR userEmail=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../pages/login.php?error=sqlError");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $email, $email);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($pass, $row['userPassword']);

                    if ($passCheck == false) {
                        header("Location: ../pages/login.php?error=wrongPassword");
                        exit();
                    }
                    elseif ($passCheck == true) {

                        if (strcmp($row['isAdmin'], "ne") == 0) {
                            session_start();

                            $_SESSION['userId'] = $row[userId];
                            $_SESSION['username'] = $row[username];
                            $_SESSION['userEmail'] = $row[userEmail];

                            header("Location: ../pages/notificationsNA.php?login=success");
                            exit();
                        } else {
                            session_start();

                            $_SESSION['userId'] = $row[userId];
                            $_SESSION['username'] = $row[username];
                            $_SESSION['userEmail'] = $row[userEmail];

                            header("Location: ../pages/notifications.php?login=success");
                            exit();
                        }

                    } else {
                        header("Location: ../index.php");
                        exit();
                    }
                }
            }
        }

    } else {
        header("Location: ../index.php");
        exit();
    }