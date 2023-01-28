<?php
class Card {
    static int $index = 0;
    public int $id;
    public string $title;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $phone;
    public string $address_one;
    public string $address_two;
    public string $city;
    public string $county;
    public string $postcode;
    public string $country;

    static function increment() {
        self::$index++;
    }

    // $yallah = function ($x) use ($y) {
    //         return $x + $y;
    //     };
    // $yallah = fn($x) => $x + $y;
    
    function __construct() {
        $this->id = self::$index;
        Card::increment();
    }

    public function __serialize() {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "phone" => $this->phone,
            "address_one" => $this->address_one,
            "address_two" => $this->address_two,
            "city" => $this->city,
            "county" => $this->county,
            "postcode" => $this->postcode,
            "country" => $this->country
        ];
    }

    public function __unseriallize(array $data) {
        $this->id = $data["id"];
        $this->title = $data["title"];
        $this->first_name = $data["first_name"];
        $this->last_name = $data["last_name"];
        $this->email = $data["email"];
        $this->phone = $data["phone"];
        $this->address_one = $data["address_one"];
        $this->address_two = $data["address_two"];
        $this->city = $data["city"];
        $this->county = $data["county"];
        $this->postcode = $data["postcode"];
        $this->country = $data["country"];
    }

    function set_title($title) {
        if(!isset($this->title)):
            $this->title = $title;
        endif;
    }

    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    function set_last_name($last_name) {
        $this->last_name = $last_name;
    }

    function set_city($city) {
        $this->city = $city;
    }

    public function get_full_name() {
        return $this->title . " " . $this->first_name . " " . $this->last_name . "\n";
    }

    public function get_full_address() {
        return $this->city . "\n";
    }

}
?>