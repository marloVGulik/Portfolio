<!DOCTYPE html>
<html lang="en">
<head>
    <title>Porfolio::mycreations</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]. "/portfolio/Data/common/"; include($IPATH."fileList.html") ?>
</head>
<body>
    <?php include($IPATH."header.html") ?>
    <div class="col-3">
        <?php include($IPATH."current.html") ?>
    </div>
    <script>createPageElement()</script>
</body>
</html>