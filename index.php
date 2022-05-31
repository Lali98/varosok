<?php
include_once('Megyek.php');
include_once('Varosok.php');

$megye = new Megyek();
$varos = new Varosok();
?>

<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magyarország</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="alap.css">
</head>
<body>
    <h1>Magyarország</h1>
    <div id="egyut">
        <div id="megye">
            <h2>Megyék</h2>
            <ul>
                <?php
                foreach ($megye->allMegye() as $key=>$item)
                {
                ?>
                    <li onclick="location.href='index.php?id=<?= $item['id'] ?>'"><?= $item['mnev'] ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div id="varos">
            <h2>Városok</h2>
            <ul>
                <?php
                foreach ($varos->getVaros(intval($_GET['id'])) as $key=>$item)
                {
                ?>
                    <li onclick="location.href='varos.php?vid=<?= $item['id'] ?>'"><?= $item['vnev'] ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
