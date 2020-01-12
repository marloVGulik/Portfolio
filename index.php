<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::Home</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-3" style="display: inline-block;">
        <?php include($IPATH."current.html") ?>
        <div class="container col-12 height-10" id="Spaceship cockpit render met Blender">
            <img src="Data/images/spaceship led strips.jpg" width="100%">
            <img src="Data/images/spaceship no led strips.jpg" width="100%">
        </div>
    </div>
    <div class="col-8" style="display: inline-block">
        <div class="container col-12 height-4" id="Een aantal plaatjes" style="overflow:hidden">
            <img src="Data/images/desktop.jpg" class="col-3"><!--
            --><img src="Data/images/desktop-blender.jpg" class="col-3"><!--
            --><img src="Data/images/texture-testing.jpg" class="col-3"><!--
            --><img src="Data/images/texture-testing-blender.jpg" class="col-3">
        </div>
        <div class="container col-12 height-9" id="Over mij">
            <img src="Data/images/me.jpg" class="col-2 triple" style="float: right; border: 1px solid #FF0000">
            <h1>Een stuk over mij op dit moment</h1>
            <p>Hallo, ik ben Marlo van Gulik, 17 jaar oud. Sinds ik met de HAVO gestopt ben, studeer ik MBO 4 niveau applicatie- en media-onwikkeling. Ik doe dit nu ongeveer een half jaar. Ik ben van de HAVO af gegaan omdat ik de HAVO te theoretisch vond. Mijn overstap naar het MBO is een geweldige keuze omdat ik nu iedere dag mag coderen!</p>
            <p>De opdrachten die ik op school krijg, heb ik sneller af dan verwacht en ik heb daarom meestal tijd over. Ik ben hiermee naar de docent gegaan en heb gevraagd of ik moeilijkere opdrachten kon krijgen. Hij heeft aan mij gevraagd of ik Minesweeper kon namaken in JavaScript. Dit gaf mij meer uitdaging. Verder heb ik samen met mijn docenten meegedaan aan de Advent of Code van 2019. De opdrachten heb ik in C++ gecodeerd. Ik heb hierdoor geleerd dat het best handig is om pointers te kunnen gebruiken. Ik weet nu ook hoe RAM werkt, wat mij uiteindelijk ook heeft geholpen met JavaScript. </p>
            <p>Ik heb Unreal Engine verkend maar deze is erg uitgebreid en wist ik nog niet waar ik moest beginnen. Daarna heb ik geprobeerd met Vulkan een game engine te maken maar dit was voordat ik voldoende kennis had van C++. Vulkan is best wel ingewikkeld als je nog geen ervaring hebt met OpenGL en C++. Op dit moment probeer ik met behulp van GLFW een game engine te maken. Vooral het maken van (random) generators en AI vind ik interessant. </p>
            <p>Ik vind het ook leuk om te modelleren en ik heb hier al eerder iets mee gemaakt, zoals het ruimteschip hiernaast. Na dit ruimteschip heb ik mijn PC-case met een non-destructive workflow nagemaakt wat ik ook leuk vond om te doen. </p>
            <h2>Waar ik naar streef</h2>
            <p>Na deze opleiding wil ik doorgaan naar de HBO, en misschien zelfs naar een universiteit. Ik zou heel graag aan een game (mee)werken omdat ik dit erg leuk en interessant vind. Het random genereren van objecten, zoals terrein of planeten vind ik het leukst. Ook AI is heel interessant, en ik zou deze kant ook heel graag willen verkennen. Ik hoop nog superveel te kunnen leren over computers, programmeren, modelleren en de nieuwste technologie. Ik denk dat er in deze branch altijd te leren valt omdat er continu nieuwe dingen ontwikkeld worden.</p>
        </div>
    </div>
    <script>createPageElement()</script>
</body>
</html>