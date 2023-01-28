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
require_once "$rootDir/views/card.php";
?>