<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

    <head>

        <!-- kodowanie i język strony-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="pl">

        <!-- Tagi, opis, tytuł -->
        <meta name="keywords" content="lorem, ipsum, dolor">
        <meta name="description" content="Moja pierwsza strona internetowa">

        <!-- Tytuł strony -->
        <title>Idealne aplikacje dla biznesu</title>

        <!-- ikonka -->
        <link rel="shortcut icon" href="">

        <!-- CSS -->
        <link rel="stylesheet" href="screen.css" type="text/css" media="screen">

    </head>

    <body>   <!-- ########### BODY ############# -->


        <!-- Logo + menu + szybki kontakt -->
        <?php
        // $active zmienna pętli shift z topMenu.php
        $active = 'index';
        require_once('topMenu.php')
        ?>


        <!-- baner -->
        <div id="sliderIndex">

            <h1> Główne hasło </h1>
            <span>bla bla bla, bla bla bal</span>

        </div>

        <!-- 4 Boxy na środku strony -->
        <div class="box4column">

        <!-- kolumna pierwsza -->
        <div>

            <img src="images/adress_book.png" width="102" height="102" alt="książka adresowa">
            <h2>książka adresowa</h2>
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="to cię przeniesie do uslugi">Książka</a>

        </div>

        <!-- kolumna druga -->
        <div>

            <img src="images/board.png" width="102" height="102" alt="tablica">
            <h2>tablica</h2>
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="to cię przeniesie do uslugi">Książka</a>

        </div>

        <!-- kolumna trzecia -->
        <div>

            <img src="images/mail_archive.png" width="102" height="102" alt="notatki">
            <h2>notatki</h2>
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="to cię przeniesie do uslugi">Książka</a>

        </div>

        <!-- kolumna czwarta -->
        <div>

            <img src="images/sticker.png" width="102" height="102" alt="">
            <h2>Książka</h2>
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="to cię przeniesie do uslugi">Książka</a>

        </div>

        </div>

        <!-- Referencje -->
        <div id="references">

        <hr>

        <span> Zadzwoń już dziś i dowiedz się co możemy dla ciebie zrobieć</span>
        <span> dsafasfa sdaf asfd asf asdfasfe afae adfasdf asf asdf </span>

        <!-- cytat -->
        <blockquote>

            Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem
            <strong>Jan Kowalski</strong>

        </blockquote>

            <hr>
        </div>

        <!-- 2 Boxy na dole strony -->
        <div class="box2column">

        <!-- kolumna pierwsza -->
        <div>

            <h2> naglowek kolumny 1</h2>
            <img src="images/consulting.jpg" width="132" height="132" alt="konsulting w naszej firmie">
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="dowiedz sie wiecejo consultingu">Konsulting</a>

        </div>

        <!-- kolumna druga -->
        <div>

            <h2> naglowek kolumny 2</h2>
            <img src="images/conferences.jpg" width="132" height="132" alt="konferencje">
            <p>afdsafasdf asdfasdfasdf asdfasdfafs asdfasdf gdshs werwrwerew fsdfsdfKontakt z firmą</p>
            <a href="uslugi.php" title="lubisz konfy">Konfy</a>

        </div>

        </div>

        <!-- Pasek dolnego menu-->

        <?php
        // $active zmienna pętli shift z topMenu.php
        $active = 'index';
        require_once('footer.php')
        ?>


    </body>

</html>