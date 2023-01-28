<?php
require_once "$rootDir/controllers/CardController.php";
$controller = new CardController();
$card = $controller->create();
echo "<main>\r\n";
include_once "$rootDir/views/card_details.php";
include_once "$rootDir/views/card_form.php";
echo "</main>\r\n";
?>