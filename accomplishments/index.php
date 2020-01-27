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
    <div class="container col-5" style="margin: auto" id="The background">
        <p style="display: inline-block" class="col-5">The image on the background was inspired by another image on the internet. I really liked that image, but I didn’t think the colour pallet suited me, and I recreated it using Blender.</p>
        <img src="/portfolio/Data/images/background-blender.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="Advent of code 2019">
        <img src="/portfolio/Data/images/advent-of-code-2019-map.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">Last December I competed in the Advent of Code 2019 with my teachers. This was a lot of fun and I learned a lot. One of the things I did was draw a giant map, because it seemed fun. Although it’s quite useless because the characters are too small, it was quite fun. I spent a long time on this, because the program used too much RAM, and my PC couldn’t handle it. Eventually it worked and it drew a map with a size of around 400 MB. The map is 17500 characters wide, and 24500 characters long.
        <a href="https://github.com/marloVGulik/Advent-of-code-2019">(Github link)</a>
        </p>
    </div>
    <div class="container col-11" id="The cockpit of a spaceship">
        <p style="display:inline-block" class="col-4">I worked on the cockpit as a fun project with Blender. I enjoy simplistic and futuristic design. This spaceship was hard to make, because the glass is hard to create.</p>
        <img src="/portfolio/Data/images/spaceship-blender.jpg" style="float: right" class="height-4">
        <img src="/portfolio/Data/images/spaceship-blender-2.jpg" style="float: right" class="height-4">
        <img src="/portfolio/Data/images/spaceship no led strips.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-11" style="margin: auto" id="The 3D textures rendering test">
        <img src="/portfolio/Data/images/texture-testing.jpg" style="float: left" class="height-4">
        <img src="/portfolio/Data/images/texture-testing-blender.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">This testing project was made because I was playing around with textures and it was a great way of testing the textures. The end result looked pretty decent I’d say.</p>
    </div>
    <div class="container col-5" id="School project sustainable home">
        <p style="display:inline-block" class="col-4">The last school project I did on the HAVO, was creating a sustainable home in Blender. I unfortunately couldn’t get my oldest school projects back, because they are on the servers on my old school. I did think this one was worth putting on my portfolio. It’s a lot of wood, but it looks okay.</p>
        <img src="/portfolio/Data/images/schoolproject-duurzaamheid.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="A retro scifi car">
        <img src="/portfolio/Data/images/car-1-blender.jpg" style="float: right" class="height-4">
        <p style="display:inline-block" class="col-2">This is the oldest project I could find. It was on my old PC and found it whilst searching for the first school project.</p>
        <img src="/portfolio/Data/images/car-2-blender.jpg" style="float: left" class="height-4">
    </div>
    <div class="container col-5" id="Minesweeper in JavaScript">
        <p style="display:inline-block" class="col-5">This is the minesweeper project I was allowed to do. It’s a completely functional version of minesweeper in the browser. I’d say it worked out pretty nice, but if I would do it again, I would do it differently, since I learned a lot about coding and JavaScript.
        <a href="https://github.com/marloVGulik/minesweeper">(Github link)</a>
        </p>
        <img src="/portfolio/Data/images/minesweeper.jpg" style="float: right" class="height-4">
    </div>
    <div class="container col-6" id="Asteroids-online in JavaScript">
        <img src="/portfolio/Data/images/asteroids-online.jpg" style="float: left" class="height-4">
        <p style="display:inline-block" class="col-6">This is a simple game I started working on a few months ago. It sounded fun to have some kind of battle royale version of the game Asteroids. The idea was to let the player play Asteroids, and slowly increase the difficulty of the game, until only one person is left, who then becomes the winner. An interesting twist would be, that you would be able to attack another player with the points you built up by shooting the asteroids. Unfortunately I haven’t come this far yet, but looking at it makes me want to work on it again.</p>
    </div>
    <script>createPageElement()</script>
</body>
</html>