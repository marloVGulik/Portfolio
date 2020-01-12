<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::Contact</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-7" style="display: inline-block; margin-left: auto">
        <div class="col-12 height-3" style="margin-bottom: 4px">
            <?php include($IPATH."current.html") ?>
        </div>
        <div class="container col-12 height-7" id="Contactgegevens">
            <h1>Mijn contactgegevens</h1>
            <ul>
                <li>Telefoonnummber: +31 6 18866708</li>
                <li><a href="mailto:mjvangulik208@gmail.com">Email: mjvangulik208@gmail.com</a></li>
                <li><a href="https://github.com/marloVGulik">Github: marloVGulik</a></li>
                <li>Woonplaats: Kinkelenburg 133, 3328 AJ Dordrecht</li>
            </ul>
        </div>
    </div>
    <div class="container col-4 height-9" style="text-align: center" id="Google maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2468.6585601212073!2d4.683362316135736!3d51.77584887968021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c428be6c61cda1%3A0x23ef3c30c4b0b780!2sKinkelenburg%20133%2C%203328%20AJ%20Dordrecht!5e0!3m2!1snl!2snl!4v1578692482875!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>

    <script>createPageElement()</script>
</body>
</html>