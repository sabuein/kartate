<?php
function modify_data($card) {
    $filePath = "./data/my_cards.json";
    file_put_contents($filePath, array($card.",".PHP_EOL), FILE_APPEND | LOCK_EX);
}
?>