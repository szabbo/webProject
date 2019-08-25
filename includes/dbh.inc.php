<?php

    //$servername = "localhost";
    //$dbUsername = "wwwinter_udrugaD";
    //$dbPassword = "P]SI.vuSWC${";
    //$dbName = "wwwinter_udruga";

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "udruga";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn)
    {
        die("Connection failed: " .mysqli_connect_error());
    }