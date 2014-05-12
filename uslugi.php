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
    <title>Nasza oferta</title>

    <!-- ikonka -->
    <link rel="shortcut icon" href="">

    <!-- CSS -->
    <link rel="stylesheet" href="screen.css" type="text/css" media="screen">

</head>

<body>  <!-- ########### BODY ############# -->

<!-- Logo + menu + szybki kontakt -->
<?php
// $active zmienna pętli shift z topMenu.php
$active = 'uslugi';
require_once('topMenu.php')
?>

<!-- baner -->
<div id="sliderServices">

    <h1>Condimentum Ultricies Vulputate</h1>
    <span>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</span>

</div>

<!-- 2 x Box -->
<div class="box2column">

    <!-- box lewy -->
    <div>

        <img src="images/messages.png" width="26" height="20" alt="Wiadomości" />
        <h2>Porta Sit Tortor</h2>
        <img src="images/consulting.jpg" width="132" height="132" alt="Consulting w naszej firmie" />

        <p>Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.<br><br>

            Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

    </div>

    <!-- Box prawy -->
    <div>

        <img src="images/documents.png" width="19" height="20" alt="Dokumenty" />
        <h2>Pharetra Ullamcorper Cursus</h2>
        <img src="images/conferences.jpg" width="132" height="132" alt="Consulting w naszej firmie" />

        <p>Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.<br><br>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>

    </div>

</div>

<!-- 4 usługi -->
<div id="services">

    <img src="images/adress_book.png" width="102" height="102" alt="Lorem Ipsum">
    <img src="images/board.png" width="102" height="102" alt="Lorem Ipsum">
    <img src="images/mail_archive.png" width="102" height="102" alt="Lorem Ipsum">
    <img src="images/sticker.png" width="102" height="102" alt="Lorem Ipsum">

</div>

<!-- 3 x box -->
<div class="box3column">

    <!-- Box1 -->
    <div>

        <img src="images/power_point_presentation.png" width="21" height="13" alt="Prezentacje">
        <h2>Consectetur Cursus Vehicula</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

    </div>

    <!-- Box2 -->
    <div>

        <img src="images/archive.png" width="10" height="13" alt="Archiwum">
        <h2>Dolor Mattis Amet</h2>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum.</p>

    </div>

    <!-- Box3 -->
    <div>

        <img src="images/time.png" width="13" height="13" alt="Pracownik">
        <h2>Mollis Ornare Bibendum</h2>
        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

    </div>

</div>

<!-- nagłówek info o eventach-->
<span class="eventInfo"> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</span>

<!-- 2 Bloki  info o eventach-->
<div class="box2column">


    <!-- blok 1 -->
    <div>

        <img src="images/calendar.png" width="12" height="13" alt="Event">
        <h2>Fusce Elit Ullamcorper Euismod</h2>

        <div class="event">

            <span class="infoType">DATA</span>
            <span class="info">15 września 2012</span><br><br>

            <span class="infoType">CZAS</span>
            <span class="info">od godz. 15:00 do godz. 21:00</span><br><br>

            <span class="infoType">LOKALIZACJA</span>
            <span class="info">ul. Kleeberga 5/9, 59-700 Bolesławiec</span><br><br>

            <span class="infoType">OPIS</span>
            <span class="info">Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</span><br><br>

        </div>

    </div>


    <!-- Blok 2 -->
    <div>

        <img src="images/calendar.png" width="12" height="13" alt="Event">
        <h2>Malesuada Amet Commodo</h2>

        <div class="event">

            <span class="infoType">DATA</span>
            <span class="info">23 września 2012</span><br><br>

            <span class="infoType">CZAS</span>
            <span class="info">od godz. 18:00 do godz. 22:00</span><br><br>

            <span class="infoType">LOKALIZACJA</span>
            <span class="info">ul. Kleeberga 5/9, 59-700 Bolesławiec</span><br><br>

            <span class="infoType">OPIS</span>
            <span class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna.</span><br><br>

        </div>

    </div>

</div>

<!-- Pasek dolnego menu-->
<?php
// $active zmienna pętli shift z topMenu.php
$active = 'uslugi';
require_once('footer.php')
?>


</body>

</html>