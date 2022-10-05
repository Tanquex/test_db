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
    echo "<h1 style='color:blue;'>Ya soy mas chevere</h1>";
    print('<h3>Bienvenidos a PHP</h3>');
    $nombre='Tania Hermosa';
    $carrera='Programacion';
    $grupo='5PV';
    ?>
    <ul>
        <li><?= $nombre;  ?></li>
        <li> <?php echo $carrera; ?> </li>
        <li><?= $grupo;?></li>
    </ul>

    <select name="" id="">
        <option value=""> <?= $nombre;  ?></option>
        <option value=""> <?php echo $carrera; ?> </option>
        <option value=""> <?= $grupo;?> </option>
    </select>

    <input type="text" value="<?= $nombre;  ?>">
    <input type="text" value="<?php echo $carrera; ?> ">
    <input type="text" value="<?= $grupo;?> ">
</body>
</html>