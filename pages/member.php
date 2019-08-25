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
            <div class="column column-6 siteContent">
                <h3>Postani član</h3>
                <br>
                <p>
                    Članom Instituta (koji okuplja redovite, pridružene i počasne članove)
                    može postati svaka fizička (punoljetna i poslovno sposobna) te pravna
                    osoba koja prihvaća ciljeve radi kojih je Institut osnovan, sukladno
                    zakonu i statutu Instituta.                                    
                </p>
                <br>
                <p></p>
            </div>

            <div class="column-gap"></div>

            <div class="column column-6 siteContent">
                <h3><br></h3>
                <br>
                <p>
                    Članstvo se stječe uplatom članarine koja iznosi 300 kn za fizičke osobe i 1000 kn za pravne osobe (do 4 člana iz pravne osobe). 
                </p>
            </div>
            <div class="column column-6 siteContent">
                <p>
                    Za detaljnije informacije o postupku uplate i stjecanja članstva obratite nam se na e-mail: legal@iilsj.com
                </p>
            </div>

            <div class="column-gap"></div>

            <div class="column column-6 siteContent">
                <p>IBAN: HR7024840081135115690 <br> SWIFT: RZBHHR2X</p>
            </div>
        </div>
    </div>
</div>

<?php
    require "footer.php";
?>