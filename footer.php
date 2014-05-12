<!-- Pasek dolnego menu-->
<div id="FOOTER">

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