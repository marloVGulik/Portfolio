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
            <img src="Data/images/spaceship led strips.png" width="100%">
            <img src="Data/images/spaceship no led strips.png" width="100%">
        </div>
    </div>
    <div class="col-8" style="display: inline-block">
        <div class="container col-12 height-5" id="Een aantal plaatjes" style="overflow:hidden">
            <img src="Data/images/desktop.png" class="col-3"><!--
            --><img src="Data/images/desktop-blender.png" class="col-3"><!--
            --><img src="Data/images/texture-testing.png" class="col-3"><!--
            --><img src="Data/images/texture-testing-blender.png" class="col-3">
        </div>
        <div class="container col-12 height-8" id="Over mij">
            <h1>Een stuk over mij op dit moment</h1>
            <p>
                Hallo, ik ben Marlo van Gulik, een 17 jaar oude jongen die op MBO 4 niveau applicatie- en media-onwikkeling studeert. Ik doe dit al ongeveer een half jaar, 
                sinds ik ben gestopt met de HAVO. Ik ben van de HAVO af gegaan, omdat ik het niet naar mijn zin had, en moeite had met iedere dag naar school gaan. Ik heb dit
                tot HAVO 4 volgehouden, en in het midden heb ik plotseling besloten om naar het MBO te gaan, wat een geweldige keuze was, omdat ik iedere dag weer zin heb om naar school 
                te gaan en te coderen. Ik vind het op het MBO echt geweldig, en heb ook geleerd dat leren op school niet erg hoeft te zijn. Omdat ik iedere keer de opdrachten sneller
                gedaan had dan verwacht, heb ik veel tijd over. Ik ben hiermee naar de leraren gegaan en heb gevraagd of ze mij moeilijkere opdrachten konden geven. Ik ben daarom
                Minesweeper na gaan maken, in JavaScript. Dit vond ik erg leuk, omdat het best moeilijk was en ik wat uitdaging had. Ik heb ook met de leraren meegedaan aan de Advent
                of Code van 2019, en deze heb ik in C++ gedaan. Ik heb hierdoor geleerd dat het best fijn is om pointers te gebruiken, en ook hoe RAM werkt, wat mij uiteindelijk ook
                heeft geholpen met JavaScript. Ook wil ik proberen een game engine te maken, met behulp van GLFW. Ik had dit al eerder geprobeerd met Vulkan, maar dit was nog voordat
                ik veel kennis had van C++, en ook is Vulkan geen goede start wanneer je nog nooit met OpenGL hebt gewerkt. Ik heb al een beetje basic game programming kennis, omdat ik
                een beetje met Unity en Godot heb gewerkt en ook veel videos over game programming kijk, vooral het maken van random generators en AI vind ik interessant. Ook heb ik 
                Unreal verkend, maar Unreal Engine is toch erg uitgebreid en ik wist niet waar ik kon beginnen. Ik vind het ook leuk om te modelleren, en heb hier al eerder eens wat 
                mee gemaakt, Zoals het ruimteschip. Ik heb na het ruimteschip veel geprobeerd met een non-destructive workflow. Dit vond ik erg interresant, en heb hiermee mijn PC case 
                nagemaakt. 
            </p>
            <h2>Waar ik naar streef</h2>
            <p>
                Ik wil doorgaan naar de HBO, en misschien zelfs naar een universiteit. Ik zou het geweldig vinden om game development te doen, omdat ik dit toch wel erg interresant vind.
                Het genereren van terrein of zelfs een planeet interreseerd mij heel erg, ik vind dat echt geweldig om te zien. Ook AI is heel interresant, en ik zou deze kant ook
                heel erg graag op gaan. Ik hoop nog superveel te kunnen leren over computers, programmeren, modeleren en de nieuwste technologie, en ik denk dat er in deze branch altijd
                te leren valt omdat er continu onderzoek gedaan wordt.
            </p>
        </div>
    </div>
    <script>createPageElement()</script>
</body>
</html>