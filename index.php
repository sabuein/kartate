<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartate</title>
    <?php // Homepage
    $page_slug = "homepage";

    // microtime(true) returns the unix timestamp plus milliseconds as a float
    $starttime = microtime(true);
    $endtime = microtime(true);
    $timediff = $endtime - $starttime;
    $time = secondsToTime($timediff);

    // pass in the number of seconds elapsed to get hours:minutes:seconds returned
    function secondsToTime($s)
    {
        $h = floor($s / 3600);
        $s -= $h * 3600;
        $m = floor($s / 60);
        $s -= $m * 60;
        return $h . ':' . sprintf('%02d', $m) . ':' . sprintf('%02d', $s);
    }
    ?>
</head>
<body<?php if ($page_slug) : ?> class="page-<?=$page_slug?>" <?php endif; ?>>
    <?= "$time\r\n" ?>
    <?php
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once "$rootDir/controllers/CardController.php";
    echo "Root directory: $rootDir\r\n";

    // $handle = fopen("c:\\folder\\resource.txt", "r");

    // // Windows ($fh === false)
    // $fh = fopen("c:\\Temp", "r");

    // // UNIX (is_resource($fh) === true)
    // $fh = fopen("/tmp", "r");

    $controller = new CardController();
    $card = $controller->create();
    require_once "$rootDir/views/card_details.php";
    ?>
    </body>

</html><?= "\r\n" ?>