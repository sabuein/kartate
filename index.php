<?php
include_once "oop/card.php";
include_once "oop/io.php";
// microtime(true) returns the unix timestamp plus milliseconds as a float
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
    echo $x."\n";
endfor;
$endtime = microtime(true);
$timediff = $endtime - $starttime;
echo secondsToTime($timediff)."\n";

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