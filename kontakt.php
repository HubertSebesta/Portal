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
    <title>Kontakt z firmą</title>

    <!-- ikonka -->
    <link rel="shortcut icon" href="">

    <!-- CSS -->
    <link rel="stylesheet" href="screen.css" type="text/css" media="screen">


</head>

<body>  <!-- ########### BODY ############# -->

<!-- Logo + menu + szybki kontakt -->
<?php
// $active zmienna pętli shift z topMenu.php
$active = 'kontakt';
require_once('topMenu.php')
?>


<!-- baner -->
<div id="sliderContact">

    <h1> Główne hasło </h1>
    <span>bla bla bla, bla bla bal</span>

</div>


<!-- Formulaż kontaktowy -->
<div class="box2column">

    <!-- Formulaż kontaktowy -->
    <div class="bigger">

        <h2>Formulaż kontaktowy</h2>

        <p>
            Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker
            <br><br>
        </p>

        <!-- formularz PHP -->
        <form method="post" action="engine.php">

            <p>

                <label for="name">Imię i nazwisko:</label>
                <input type="text" id="name" name="name" value="">

                <label for="email">e-mail:</label>
                <input type="text" id="email" name="email" value="">

                <label for="telephone">Telefon:</label>
                <input type="text" id="telephone" name="telephone" value="">

                <label for="message">Treść wiadomości:</label>
                <textarea id="message" name="message" rows="8" cols="60"></textarea>

                <input type="submit" id="submit" name="submit" value="Wyślij">

            </p>

        </form>

    </div>

    <!-- prawa strona -->
    <div class="smaller">

        <!-- class icon, inna stylizacja w css-->
        <img src="images/contact_details.png" width="27" height="20" alt="Dane kontaktowe" class="icon">

        <h2>Dane kontaktowe</h2>


        <p>
            Tel. <strong>123-123-123</strong><br>
            email <strong>abdsadasdc@abc.pl</strong><br>

            <img src="images/map.png" width="246" height="245" alt="Mapa" >

        </p>

    </div>


</div>


<!-- Pasek dolnego menu-->
<?php
// $active zmienna pętli shift z topMenu.php
$active = 'kontakt';
require_once('footer.php')
?>

</body>

</html>