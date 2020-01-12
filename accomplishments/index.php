<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::accomplishments</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-11 height-3" style="margin: 0 auto 4px auto">
        <?php include($IPATH."current.html") ?>
    </div>
    <div class="container col-5" style="margin: auto" id="De achtergrond">
        <p style="display: inline-block" class="col-5">Het plaatje dat op de achtergrond staat, heb ik zelf gemaakt in Blender. Mijn inspiratie heb ik van een ander plaatje in andere kleuren opgedaan. Ik vond het plaatje dat ik had gevonden erg mooi, alleen was ik het niet eens met de kleuren. En daarom heb ik een zelfde soort plaatje nagemaakt, in mijn eigen kleuren.</p>
        <img src="/portfolio/Data/images/background-blender.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="Advent of code 2019">
        <img src="/portfolio/Data/images/advent-of-code-2019-map.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">Ik heb het afgelopen jaar meegedaan aan the Advent of Code, wat ik erg leuk vond en ik heb hier veel van geleerd. Een van de dingen die ik heb gedaan voor de lol, is een map tekenen, met behulp van C++. Hier ben ik veel mee bezig geweest, omdat ik voor iedere coördinaat een kleine struct had. Hierdoor gebruikte ik te veel RAM, en dat kon mijn PC niet aan. Uiteindelijk is het mij gelukt om het programma te laten werken zonder mijn PC volop te gebruiken. Ik vond het geweldig dat ik alles in mijn computer kon gebruiken.  Het uiteindelijke bestand was 400 MB groot, en is 17500 karacters in 24500 lijnen.
        <a href="https://github.com/marloVGulik/Advent-of-code-2019">(Github link)</a>
        </p>
    </div>
    <div class="container col-11" id="De cockpit van een ruimteschip">
        <p style="display:inline-block" class="col-4">Ook heb ik gewerkt aan een cockpit van een ruimteschip, wat ik erg leuk vind. Ik vind sci-fi en simplistisch design mooi, en heb daarom geprobeerd een ruimteschip te maken. </p>
        <img src="/portfolio/Data/images/spaceship-blender.jpg" style="float: right" class="height-4">
        <img src="/portfolio/Data/images/spaceship-blender-2.jpg" style="float: right" class="height-4">
        <img src="/portfolio/Data/images/spaceship no led strips.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-11" style="margin: auto" id="De 3D textures rendering test">
        <img src="/portfolio/Data/images/texture-testing.jpg" style="float: left" class="height-4">
        <img src="/portfolio/Data/images/texture-testing-blender.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">De 3D textures rendering test heb ik gemaakt om te testen hoe 3D textures werken, met normal maps en height maps. Reflectie en diffuse zitten er ook bij. Dit vond ik erg leuk, omdat het er redelijk echt uit zag, vergeleken met wat ik eerder heb gemaakt. </p>
    </div>
    <div class="container col-5" id="Schoolproject duurzaam huis">
        <p style="display:inline-block" class="col-4">Een van de laatste schoolprojecten op de HAVO, heb ik dit product gemaakt, en ik vond deze wel mooi om hierbij te zetten. Het is een duurzaam huis, met veel hout en glas. </p>
        <img src="/portfolio/Data/images/schoolproject-duurzaamheid.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="Een retro scifi auto">
        <img src="/portfolio/Data/images/car-1-blender.jpg" style="float: right" class="height-4">
        <p style="display:inline-block" class="col-2">Deze auto is gemaakt op mijn oude computer. Dit is het meest oude project wat ik kon vinden, maar helaas niet de eerste. </p>
        <img src="/portfolio/Data/images/car-2-blender.jpg" style="float: left" class="height-4">
    </div>
    <div class="container col-5" id="Minesweeper in JavaScript">
        <p style="display:inline-block" class="col-5">Een project dat ik mocht doen was Minesweeper namaken. Dit is best wel goed gelukt, sinds dit project heb ik veel geleerd over JavaScript. Als ik hem nu opnieuw zou maken, zou ik het heel anders doen. Maar toch ben ik blij met wat het is geworden, ook al is de styling niet helemaal gedaan.
        <a href="https://github.com/marloVGulik/minesweeper">(Github link)</a>
        </p>
        <img src="/portfolio/Data/images/minesweeper.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="Asteroids-online in JavaScript">
        <img src="/portfolio/Data/images/asteroids-online.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">Met dit spel ben ik een aantal maanden geleden begonnen, omdat het me leuk leek om een soort van battle-royale te hebben van het spel Asteroids. Het idee was om een speler Asteroids te laten spelen, en de moeilijkheidsgraad langzaam op te voeren, tot er maar één persoon over blijft. Ik dacht ook aan een systeem om je punten tijdens het spel op iemand anders te kunnen lossen, als een soort aanval om het de ander moeilijker te maken. Helaas ben ik niet zo ver gekomen, maar nu ik er weer naar kijk wil ik eigenlijk wel weer verder eraan werken. </p>
    </div>
    <script>createPageElement()</script>
</body>
</html>