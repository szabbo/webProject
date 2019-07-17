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
        <img src="img/blueBooksV2.jpg" alt="resposiveImage">
    </div>
    <div class="break"></div>
    <div class="container">
        <div class="row">
            <div class="column column-6 siteContent">
                <h3>O nama</h3>
                <br>
                <p>
                    Međunarodni institut za pravne znanosti i praksu (International
                    Institute of Legal Science and Jurisprudence) je Institut sa sjedištem
                    u Zagrebu u Hotelu Westin, I. Kršnjavoga 1, koji okuplja pravne
                    znanstvenike i praktičare iz brojnih zemalja, a koji je osnovan u
                    cilju promicanja, razvitka i unapređenja pravne znanosti i prakse
                    radi povezivanja znanstvenika i praktičara, izdavanja znanstvenih i
                    stručnih publikacija, popularizacije pravne znanosti i povezivanja s
                    praktičarima, umrežavanja i međunarodne znanstvene i stručne suradnje.
                </p>
                <p>
                                                        
                </p>
            </div>

            <div class="column column-gap"></div>

            <div class="column column-6 siteContent">
                <h3>Osnovne djelatnosi instituta</h3>
                <br>
                <p>
                    Osnovne djelatnosti Instituta su organiziranje predavanja, treninga,
                    radionica, seminara, savjetovanja, domaćih i međunarodnih znanstvenih
                    te znanstvenostručnih skupova, škola, kongresa, kao i izdavaštvo te
                    suradnja s državnim tijelima u pripremi propisa.                                    
                </p>
                <p></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="column column-6">
                <h3>Sudačka praksa na zahtijev</h3>
                <p>Ukoliko ste zainteresirani za sudačku praksu ili imate bilo kakvih pitanja slobodno nam se javite te ćemo vam dogovoriti u najkraćem roku.</p>
                <p></p>

                <div>
                    <div>
                    <form action="contactForm.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Ime i prezime..."><br><br>
                        <input type="text" name="email" id="email" placeholder="Email adresa..."><br><br>
                        <input type="text" name="subject" id="subject" placeholder="Tema..."><br><br>


                        <textarea id="editor" class="ckeditor" name="editor" placeholder="Sadržaj emaila..."></textarea><br><br>
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
                        <button type="submit" name="ckeditor-submit">Pošalji</button><br><br><br>
                    </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>