<?php
$page_slug = "homepage";
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$rootDir/views/header.php";
require_once "$rootDir/controllers/CardController.php";
$controller = new CardController();
$card = $controller->create();
require_once "$rootDir/views/card_details.php";
require_once "$rootDir/views/card_form.php";
require_once "$rootDir/views/footer.php";
?>