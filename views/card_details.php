<?php
echo <<<EOT
<div>
    <h1>Card Details</h1>
    <p>ID: $card->id</p>
    <p>Name: $card->name</p>
    <p>Age: $card->dob</p>
    <p>Email: $card->email</p>
    <p>Address: $card->address</p>
    <p>Contact numbers: $card->phoneNumbers</p>
    <p>Social media: $card->socialMedia</p>
    <p>Other links: $card->url</p>
</div>\r\n
EOT;
?>