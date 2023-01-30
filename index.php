<?php declare(strict_types=1); // strict requirement
define("SLUG", "homepage");
define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));
$rootDir = ROOT;
require_once "$rootDir/views/header.php";
require_once "$rootDir/views/main.php";
require_once "$rootDir/views/footer.php";

/* $GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
var_dump($GLOBALS);
?>