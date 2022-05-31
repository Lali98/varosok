<?php
include_once('Varosok.php');

$varosok = new Varosok();
?>

<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="alap.css">
    <link rel="stylesheet" href="varos.css">
</head>
<body>
    <h1><?= $varosok->getVarosInfo(intval($_GET['vid']))['vnev'] ?></h1>
    <ul>
        <li>Megye: <?= $varosok->getVarosInfo(intval($_GET['vid']))['mnev'] ?></li>
        <li>Várostípus: <?= $varosok->getVarosInfo(intval($_GET['vid']))['vtip'] ?></li>
        <li>Járás: <?= $varosok->getVarosInfo(intval($_GET['vid']))['jaras'] ?></li>
        <li>Kistérség: <?= $varosok->getVarosInfo(intval($_GET['vid']))['kisterseg'] ?></li>
        <li>Népeség: <?= $varosok->getVarosInfo(intval($_GET['vid']))['nepesseg'] ?> fő</li>
        <li>Terület: <?= $varosok->getVarosInfo(intval($_GET['vid']))['terulet'] ?> km<sup>2</sup></li>
    </ul>
</body>
</html>
