<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: #ED614A;
        }
    </style>
</head>

<body>
    <p> <?php echo $new->getHeading(); ?></p>
    <p> <?php echo $new->getContent(); ?></p>
    <p>
        <a href="edit.php?id=<?php echo $new->id; ?>">
            go to edit page
        </a>
    </p>


</body>


</html>