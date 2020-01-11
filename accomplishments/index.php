<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::accomplishments</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-11" style="margin: auto">
        <?php include($IPATH."current.html") ?>
    </div>
    <div class="container col-5" style="margin: auto" id="De achtergrond">
        <p style="display: inline-block; width:45%">
            Het plaatje dat op de achtergrond staat, heb ik zelf gemaakt in Blender, met inspiratie van een ander plaatje in indere kleuren. Ik vond het plaatje dat ik had gevonden
            erg mooi, alleen was ik het niet eens met de kleuren. En daarom heb ik een zelfde soort plaatje nagemaakt, in mijn eigen kleuren.
        </p>
        <img src="/portfolio/Data/images/background-blender.png" style="float: right" height="200em">
    </div>
    <div class="container col-6" id="Advent of code 2019">
        <img src="/portfolio/Data/images/advent-of-code-2019-map.png" style="float: left" height="200em">
        <p style="display:inline-block; width: 50%">
            Ik heb afgelopen jaar meegedaan aan the Advent of Code, wat ik erg leuk vond en ik heb hier veel van geleerd. Een van de dingen die ik heb gedaan voor de lol, is een map
            tekenen, met behulp van C++. Ik ben hier veel mee bezig geweest, omdat ik voor iedere coordinaat een kleine struct had. Hierdoor gebruikte ik te veel RAM, en dat kon mijn
            PC niet aan. Ik vond het geweldig dat ik alles in mijn computer kon gebruiken. Het uiteindelijke bestand was 400 MB groot, en is 24500 characters in 17500 lijnen.
        </p>
    </div>
    <div class="container col-11" id="Het ruimteschip">
        <p style="display:inline-block; width: 30%">
            Ik heb ook gewerkt aan een ruimteschip, wat ik erg leuk vind. Vooral het glas was moeilijk om te maken, maar erg goed gelukt.
        </p>
        <img src="/portfolio/Data/images/spaceship-blender.png" style="float: right" height="200em">
        <img src="/portfolio/Data/images/spaceship-blender-2.png" style="float: right" height="200em">
        <img src="/portfolio/Data/images/spaceship no led strips.png" style="float: right" height="200em">
    </div>
    <div class="container col-5" style="margin: auto" id="De 3D textures rendering test">
        <img src="/portfolio/Data/images/texture-testing.png" style="float: left" height="200em">
        <img src="/portfolio/Data/images/texture-testing-blender.png" style="float: left" height="200em">
        <p style="display:inline-block; width: 55%">
            De 3D textures rendering test heb ik gemaakt om te testen hoe 3D textures werken, met normal maps en height maps. Ook reflection en diffuse zit erbij. Dit vond ik 
            erg leuk, omdat het er redelijk echt uit zag, vergeleken met wat ik eerder heb gemaakt.
        </p>
    </div>
    
    <script>createPageElement()</script>
</body>
</html>