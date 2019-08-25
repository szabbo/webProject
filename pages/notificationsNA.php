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
                    <a class="dropbtn" href="notificationsNA.php">Obavijesti</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropbtn" href="editMembersNA.php">Članovi</a>
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
                    <a class="dropbtn" href="includes/logout.inc.php">Logout</a>
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
        <div id="createNewPost">

        <form action="../includes/getCkEditorData.inc.php" method="post" class="txtEditor">
            <textarea id="editor" class="ckeditor" name="editor"></textarea><br><br>
            <script src="ckeditor/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ), {
                        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                    } )
                    .then( editor => {
                        window.editor = editor;
                    } )
                    .catch( err => {
                        console.error( err.stack );
                    } );
            </script>
            <button type="submit" name="ckeditor-submit">Spremi objavu</button><br><br>
        </form>

        <form action="../includes/retriveDataCkE.inc.php" method="post">
            <table border = 1 cellpadding = 1 cellspacing = 1>
                <tr>
                    <th>Content</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM notifications ORDER by 1 DESC";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['notificationContent']."</td>";
                        echo "<td><a class='functionBtn' href=../includes/deleteNotification.inc.php?id=".$row['notificationId'].">Obriši</a></td>";
                        echo "<td><a class='functionBtn' href=editNotifications.php?id=".$row['notificationId'].">Uredi</a></td>";
                    }
                ?>
            </table>
        </form>
        
        </div>     
    </div>

<?php
    require "footer.php";
?>