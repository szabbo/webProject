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
                    <a class="dropbtn" href="notifications.php">Obavijesti</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="editMembers.php">Članovi</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                </div>
            </li>
            <!--<li class="nav-item">
                <div class="nav-dropdown">
                    <!--<button class="dropbtn">Aktivnosti</button>-->
                    <!--<a class="dropbtn" href="contactUs.php">Kontakt</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                <!--</div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="english.php">English</a>
                    <!--<div class="nav-dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>-->
                <!--</div>
            </li>-->
            <li class="nav-item">
                <div class="nav-dropdown">
                <!-- tu ide logout-->
                    <a class="dropbtn" href="../includes/logout.inc.php">Logout</a>
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
        <div id="deleteUsers">
            <form action="../includes/delete.inc.php" method="post">
                <table border = 1 cellpadding = 1 cellspacing = 1>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Korisničko ime</th>
                        <th>Email</th>
                        <th>Administrator</th>
                        <th>Kontakt broj</th>
                        <th>Adresa</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>".$row['userFirstName']."</td>";
                            echo "<td>".$row['userLastName']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['userEmail']."</td>";
                            echo "<td>".$row['isAdmin']."</td>";
                            echo "<td>".$row['userPhoneNumber']."</td>";
                            echo "<td>".$row['userAddress']."</td>";
                        }
                    ?>
                </table>
            </form>
        </div>     
    </div>

    <div class="break"></div>

<?php
    require "footer.php";
?>