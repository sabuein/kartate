<?php
echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartate</title>
</head>\r\n
EOT;
if (isset($page_slug)):
    echo "<body class=\"page-$page_slug\">";
else:
    echo "<body>";
endif;
echo "\r\n";
?>