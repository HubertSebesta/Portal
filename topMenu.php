<!-- Logo + menu + szybki kontakt -->




<!-- Logo -->
<div id="TOP">
    <div id="logo">

        <!-- Logo grafika -->
        <img src="images/logo.png" width="85" height="54" alt="LOGO">

        <!-- Nazwa i opis firmy -->
        <span>HS Company</span>
        <span> Tra la la la la</span>

    </div>

    <!-- Szybki Kontakt -->
    <div id="fastContact">
        <img src="images/telephone.png" width="20" height="31" alt="telefon kontaktowy"/>
        <span>Zadzwon dowisz się więcej</span>
        <span>500 113 500</span>

    </div>

</div>

<!-- Pasek Menu -->
<div id="MENU">
    <!-- a uchwyt do css -->

    <!--  podświetlanie odnośnika na którym jest użytkownik
    php dokleja class="active" do linka który jest informacją dla CSS -->
    <?php
switch ($active) {
    case 'index':
        echo '<a href="index.php" title="Strona główna | LoremIpsum" class="active">Strona główna</a>'.
             '<a href="oFirmie.php" title="O firmie | LoremIpsum">O firmie</a>'.
             '<a href="uslugi.php" title="Usługi | LoremIpsum">Usługi</a>'.
             '<a href="kontakt.php" title="Kontakt | LoremIpsum">Kontakt</a>';
        break;
    case 'kontakt':
        echo '<a href="index.php" title="Strona główna | LoremIpsum">Strona główna</a>'.
             '<a href="oFirmie.php" title="O firmie | LoremIpsum">O firmie</a>'.
             '<a href="uslugi.php" title="Usługi | LoremIpsum">Usługi</a>'.
             '<a href="kontakt.php" title="Kontakt | LoremIpsum" class="active">Kontakt</a>';
        break;
    case 'oFirmie':
        echo '<a href="index.php" title="Strona główna | LoremIpsum">Strona główna</a>'.
             '<a href="oFirmie.php" title="O firmie | LoremIpsum" class="active">O firmie</a>'.
             '<a href="uslugi.php" title="Usługi | LoremIpsum">Usługi</a>'.
             '<a href="kontakt.php" title="Kontakt | LoremIpsum">Kontakt</a>';
        break;
    case 'uslugi':
        echo '<a href="index.php" title="Strona główna | LoremIpsum">Strona główna</a>'.
             '<a href="oFirmie.php" title="O firmie | LoremIpsum">O firmie</a>'.
             '<a href="uslugi.php" title="Usługi | LoremIpsum" class="active">Usługi</a>'.
             '<a href="kontakt.php" title="Kontakt | LoremIpsum">Kontakt</a>';
        break;
    default:
        echo "coś poszło nie tak :("; }

    ?>

</div>

