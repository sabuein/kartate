<?php
echo <<<EOT
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="$card->name">
    <br />
    <label for="dob">DoB:</label>
    <input type="date" name="dob" id="dob" value="$card->dob" min="1910-01-01" max="2003-12-31">
    <br />
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="$card->email">
    <br />
    <input type="submit" value="Save">
</form>\r\n
EOT;
?>