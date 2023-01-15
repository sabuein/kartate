<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartate</title>
    <?php
        // include_once "oop/card.class.php";
        // include_once "oop/io.class.php";
        function __load($name) {
            echo "Autoloader called for $name" . "<br />\r\n";
            require "oop/" . strtolower($name) . ".class.php";
        }
        spl_autoload_register("__load");

        __load("card");
        __load("io");

        $page_slug = "homepage";

        // microtime(true) returns the unix timestamp plus milliseconds as a float
        $result = "";
        $starttime = microtime(true);
        for ($x = 0; $x < 99; ++$x):
            $myCard = new Card();
            $myCard->set_title("Mr");
            $myCard->set_first_name("Salaheddin");
            $myCard->set_last_name("AbuEin");
            $myCard->set_city("London");
            // $cardJSON = json_encode($myCard, JSON_PRETTY_PRINT);
            $cardJSON = json_encode($myCard);
            modify_data($cardJSON);
            $result .= $x . "<br />\r\n";
        endfor;
        $endtime = microtime(true);
        $timediff = $endtime - $starttime;
        $time = secondsToTime($timediff);

        // echo $myCard->get_full_name();
        // echo $myCard->get_full_address();
        // echo $cardJSON . "\n";

        // pass in the number of seconds elapsed to get hours:minutes:seconds returned
        function secondsToTime($s)
        {
            $h = floor($s / 3600);
            $s -= $h * 3600;
            $m = floor($s / 60);
            $s -= $m * 60;
            return $h.':'.sprintf('%02d', $m).':'.sprintf('%02d', $s);
        }
    ?>
</head>
<body<?php if ($page_slug): ?> class="page-homepage"<?php endif;?>>
    <?= $time ?>
    <?= $result ?>
</body> 
</html>