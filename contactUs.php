<?php
    require "includes/dbh.inc.php";
    require "header.php";
?>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="column logo-column">
                <img src="img/logo.png" alt="lawLogo" width="100" height="100">
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
                    <a class="dropbtn" href="index.php">Početna</a>
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
                    <a class="dropbtn" href="pages/contactUs.php">Kontakt</a>
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
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<a class="dropbtn" href="includes/logout.inc.php">Logout</a>';
                        } else {
                            echo '<a class="dropbtn" href="login.php">Login</a>';
                        }
                    ?>
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
        <img src="img/blueBooksV2.jpg" alt="resposiveImage">
    </div>
    <div class="break"></div>
    <div class="container">
        <div class="row">
            <div class="column column-6 siteContent">
                <h3>Adresa</h3>
                <br>
                <p>
                    The Westin Hotel <br>
                    Izidora Kršnjavog 1 <br>
                    10 000 Zagreb <br>
                    Hrvatska
                </p>
                <br>
                <p></p>
            </div>
            <div class="column column-6 siteContent">
                <h3>Online</h3>
                <br>
                <p>E-mail: legal@iilsj.com</p>
                <p>Facebook: International institute of legal science and jurisprudence</p>
                <p>Broj telefona: +385 99 7400 749</p>
            </div>
        </div>
    </div>
</div>

<?php
    require "footer.php";
?>