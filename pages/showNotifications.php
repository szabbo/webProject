<?php
    require "../includes/dbh.inc.php";
    require "header.php";
?>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="column logo-column">
                <img src="../img/logo.png" alt="lawLogo" width="100" height="100">
            </div>
            <div class="column title-column">
                <div>
                    <h1 class="title">Međunarodni institut za pravne znanosti i praksu</h1>
                    <!--<p class="underTheTitle">Možda nekakav moto ili slogan</p>-->
                </div>
            </div>
            <!--<div class="column column-3"></div>-->
        </div>
    </div>
    <nav class="nav">
        <ul class="nav-wrapper">
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="main.php">Početna</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="showNotifications.php">Obavijesti</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="member.php">Postani član</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <!--<button class="dropbtn">Aktivnosti</button>-->
                    <a class="dropbtn" href="contactUs.php">Kontakt</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="english.php">English</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="login.php">Login</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
        </ul>
        <!--<button class="btn-menu-mobile">Menu</button>-->
    </nav>
    <div class="img">
        <img src="../img/blueBooksV2.jpg" alt="resposiveImage">
    </div>
    <div class="break"></div>
    <div class="container">
        <div class="row">
            <div class="showNotifications">
                <form action="../includes/retriveDataCkE.inc.php" method="post">
                    <table border = 1 cellpadding = 1 cellspacing = 1>
                        <tr>
                            <th>Obavijesti</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM notifications";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>".$row['notificationContent']."</td>";
                            }
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    require "footer.php";
?>