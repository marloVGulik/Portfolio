<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::Skills</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-11" style="margin: auto">
        <?php include($IPATH."current.html") ?>
    </div>
    <div class="container col-11" id="Mijn skills">
        <h1>Mijn skills</h1>
        <p>Hieronder heb ik mijn skills opgesomt. Ik hoop dat ik deze skills heb kunnen bewijzen met de dingen die ik heb gemaakt. Dit zijn mijn skills:</p>
        <ul>
            <li>JavaScript</li>
            <li>NodeJS met socket.io</li>
            <li>CSS</li>
            <li>HTML</li>
            <li>C++</li>
            <li>Modeleren in Blender</li>
            <li>Een beetje batch</li>
            <li>Alleen werken, zelf onderzoek doen</li>
            <li>Werken in een team</li>
            <li></li>

        </ul>
    </div>
    <script>createPageElement()</script>
</body>
</html>