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
        <div class="container col-12 height-10" id="Spaceship cockpit render using Blender">
            <img src="Data/images/spaceship led strips.jpg" width="100%">
            <img src="Data/images/spaceship no led strips.jpg" width="100%">
        </div>
    </div>
    <div class="col-8" style="display: inline-block">
        <div class="container col-12 height-4" id="A few images" style="overflow:hidden">
            <img src="Data/images/desktop.jpg" class="col-3"><!--
            --><img src="Data/images/desktop-blender.jpg" class="col-3"><!--
            --><img src="Data/images/texture-testing.jpg" class="col-3"><!--
            --><img src="Data/images/texture-testing-blender.jpg" class="col-3">
        </div>
        <div class="container col-12 height-9" id="About me">
            <img src="Data/images/me.jpg" class="col-2 triple" style="float: right; border: 1px solid #FF0000">
            <h1>A little about me</h1>
            <p>Hi, I am Marlo van Gulik and I am 17 years old. Last year I transferred from an administrative education (HAVO) to application development (MBO). I made this choice, because the administrative eduction was too theoretical. This was a great choice, since I can develop my coding skills further and do something I enjoy.</p>
            <p>In one of the first weeks of the new education, it became clear that I finished the assignments relatively easily. I went to the teachers with this because I had a lot of spare time. The teachers gave me the opportunity to recreate minesweeper in JavaScript. Doing this was great, because it was more challenging than the normal assignments. In December the teachers and me participated in the Advent of Code 2019. I did this in C++ because I was looking for more challenge and I was learning C++ at this time. Because of this I learned how RAM works and I learned a lot about C++. This helped me with making JavaScript code too.</p>
            <p>Games have always been interesting for me, and I would love to create a game. I have done some research for making games, and looked at several engines to run the game on. They’re all quite interesting, but I had no idea what kind of game to make. Currently, I am creating an engine to run the game on, as challenge and for fun since I love coding. I started with Vulkan as rendering API, but this is quite hard when you don’t have OpenGL experience yet. It didn’t work out and I didn’t understand Vulkan. But I didn’t give up and completely stop, I restarted but this time I am using GLFW, since it’s a lot more simple. Right now it’s going great, although I haven’t come very far yet, but the basics are here.</p>
            <p>In the second year of HAVO, I used Blender for a school project, and loved using it to create 3D models. I did a lot more research after this, and started enjoying it way more. I made this spaceship cockpit on the left, and my PC’s case (the top picture). The PC’s case was made using a non-destructive workflow.</p>
            <h2>What I want</h2>
            <p>I want to continue to HBO, and maybe even university. Making games seems like a lot of fun to me, the logic part as well as the design part. What I have always found interesting in games is procedural generation. Also artificial intelligence is really interesting. This field interests me because there is always something to learn, and I hope to learn a lot.</p>
        </div>
    </div>
    <script>createPageElement()</script>
</body>
</html>
