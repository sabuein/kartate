<?php
$filePath = "./data/my_cards.json";
$final_cards = json_decode(file_get_contents($filePath), true);
//var_dump($final_cards);
print_r($final_cards["4"]);
//print_r(array_keys($final_cards));
?>