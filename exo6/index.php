<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = 'Laura';
        echo 'Bonjour '.$name.', comment vas tu ?';
        ?>
        <p>(Aussi possible)Bonjour <?= $name; ?>, comment vas tu ?</p>
    </body>
</html>