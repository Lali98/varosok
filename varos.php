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
</head>
<body>
    <h1><?= $varosok->getVarosInfo(intval($_GET['vid']))['vnev'] ?></h1>
</body>
</html>
