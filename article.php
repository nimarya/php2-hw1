<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require __DIR__ . '/classes/DataBase.php';
    require __DIR__ . '/classes/News.php';

    $new = News::getById((int)$_GET['id']);

    echo $new->getHeading();
    echo "<br>";
    echo $new->getContent();
    echo "<br>";
    ?>
</body>

</html>