<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::Skills</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-11 height-3" style="margin: auto">
        <?php include($IPATH."current.html") ?>
    </div>
    <div class="container col-11" id="My skills">
        <h1>My skills</h1>
        <p>Below this line I summed up some of the skills I have. I hoped to have proven these skills by showing what I made already. These are my skills:</p>
        <ul>
            <li>JavaScript</li>
            <li>NodeJS met socket.io</li>
            <li>CSS</li>
            <li>HTML</li>
            <li>C++</li>
            <li>Modelling in Blender</li>
            <li>(A tiny bit of) batch </li>
            <li>Working alone, and researching alone</li>
            <li>Working in a team </li>
        </ul>
        <p>
            This is not really a skill, but I love learning about coding or design. I hope to learn a lot about coding and design.
        </p>
    </div>
    <script>createPageElement()</script>
</body>
</html>