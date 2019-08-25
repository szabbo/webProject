<?php
    if(isset($_POST['signup-submit'])) {
        //include
        require 'dbh.inc.php';

        $firstName = $_POST['userFirstName'];
        $lastName = $_POST['userLastName'];
        $username = $_POST['userUsername'];
        $email = $_POST['userEmail'];
        $pass = $_POST['userPass'];
        $passRepeat = $_POST['userPassRepeat'];
        $isAdmin = $_POST['isAdmin'];
        $phoneNumber = $_POST['userPhoneNumber'];
        $address = $_POST['userAddress'];

        //security checks
        if (empty($username) || empty($email) || empty($pass) ||  empty($passRepeat)) {
            header("Location: ../pages/editMembers.php?error=emptyfields&userUsername".$username."&userEmail".$email);
            exit();
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../pages/editMembers.php?error=invalid&userUsernameAndMail");
            exit();
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../pages/editMembers.php?error=invalidUsername&userUsername".$username);
            exit();
        }
        elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../pages/editMembers.php?error=invalidUsername&userUsername".$email);
            exit();
        }
        elseif ($pass !== $passRepeat) {
            header("Location: ../pages/editMembers.php?error=passCheck&userUsername".$username."&userEmail".$email);
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE userEmail=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../pages/signup.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                $resultCheck = mysqli_stmt_num_rows($stmt);

                if ($resultCheck > 0) {
                    header("Location: ../pages/editMembers.php?error=usernameIsTaken&userEmail".$email);
                    exit();
                } else {
                    $sql = "INSERT INTO users (userFirstName, userLastName, username, userEmail, userPassword, isAdmin, userPhoneNumber, userAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../pages/editMembers.php?error=sqlError");
                        exit();
                    } else {
                        $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $username, $email, $hashedPwd, $isAdmin, $phoneNumber, $address);
                        mysqli_stmt_execute($stmt);

                        header("Location: ../pages/editMembers.php?signup=sucess");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        header("Location: ../pages/editMembers.php");
        exit();
    }