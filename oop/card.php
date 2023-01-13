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

    function __construct() {
        $this->id = self::$index;
        Card::increment();
    }

    static function increment() {
        self::$index++;
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