<?php

// require_once "$rootDir/models/Form.php";
require_once "$rootDir/models/Card.php";

// $validation_result = $card->validate();

// if ($validation_result === true) {
//     $result = $card->save();
//     $message = $result;
// } else {
//     $message = $validation_result;
// }

class CardController
{
    public function add(
        $name = null,
        $dob = null,
        $email = null,
        $address = null,
        $numbers = null,
        $social = null,
        $url = null
    ) {
        $name = $name ?? "Salaheddin AbuEin";
        $dob = $dob ?? "1987-01-18";
        $email = $email ?? "sabuein@gmail.com";
        $address =
            $address ??
            new Address(
                "129 Seymour Road",
                "London",
                "Greater London",
                "E10 7LZ",
                "United Kingdom"
            );
        $numbers = $numbers ?? new PhoneNumbers(mobile: "07930120661");
        $social =
            $social ??
            new SocialMedia(
                twitter: "https://twitter.com/sabuein",
                facebook: "https://www.facebook.com/sabuein/",
                instagram: "https://www.instagram.com/sabuein/"
            );
        $url =
            $url ??
            new URL(["https://sabuein.github.io/", "https://abuein.com/"]);

        return new Card($name, $dob, $email, $address, $numbers, $social, $url);
    }

    public function read($card_id)
    {
        // code to read a card from the database goes here
    }

    public function modify($card_id, $new_name, $new_age, $new_gender)
    {
        // code to modify a card in the database goes here
    }

    public function delete($card_id)
    {
        // code to delete a card from the database goes here
    }
}
?>