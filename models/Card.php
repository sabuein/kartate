<?php

require_once "$rootDir/models/Address.php";
require_once "$rootDir/models/ContactNumbers.php";
require_once "$rootDir/models/IO.php";
require_once "$rootDir/models/SocialMedia.php";
require_once "$rootDir/models/URL.php";

class Card
{
    static int $index = 0;
    public int $id;
    public string $name;
    public string $dob;
    public string $email;
    public Address $address;
    public ContactNumbers $contactNumbers;
    public SocialMedia $socialMedia;
    public URL $url;
    
    private $gender;
    private $allowedGenders = ["male", "female", "non-binary", "other"];

    static function increment() {
        self::$index++;
    }
    
    public function __construct(
        string $name,
        string $dob,
        string $email = null,
        Address $address,
        ContactNumbers $contactNumbers,
        SocialMedia $socialMedia,
        URL $url
    ) {
        $this->id = self::$index;
        Card::increment();
        $this->name = $name;
        $this->dob = $dob;
        $this->email = $email ?? "unknown";
        $this->address = $address;
        $this->contactNumbers = $contactNumbers;
        $this->socialMedia = $socialMedia;
        $this->url = $url;
    }

    public function __destruct()
    {
        // Clean up, if necessary
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __call($method, $arguments)
    {
        // TODO
    }

    public function __toString()
    {
        // TODO
    }

    public function __clone()
    {
        // TODO
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

    public function __set($property, $value)
    {
        switch ($property) {
            case "name":
                if (strlen($value) > 30) {
                    throw new Exception(
                        "Error: Name must be less than 30 characters.\r\n"
                    );
                } else {
                    $this->name = $value;
                }
                break;
            case "age":
                if ($value < 0 || $value > 150) {
                    throw new Exception(
                        "Error: Age must be between 0 and 150.\r\n"
                    );
                } else {
                    $this->age = $value;
                }
                break;
            case "gender":
                if (in_array($value, $this->allowedGenders)) {
                    $this->gender = $value;
                } else {
                    throw new Exception("Invalid gender value provided. Allowed values: " . implode(", ", $this->allowedGenders) . "\r\n");
                }
                break;
            case "email":
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    throw new Exception("Error: Invalid email format.\r\n");
                } else {
                    $this->email = $value;
                }
                break;
            case "phone":
                if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $value)) {
                    throw new Exception(
                        "Error: Phone number must be in the format 555-555-5555."
                    );
                } else {
                    $this->phone = $value;
                }
                break;
            case "address":
                $this->address = $value;
                break;
            default:
                throw new Exception("Error: Property does not exist.");
        }
    }

    public function validate()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email address";
        }
        if (strlen($this->name) < 2) {
            return "Name is too short";
        }
        if ($this->age < 0 || $this->age > 150) {
            return "Invalid age";
        }
        return true;
    }

    public function save()
    {
        if ($this->validate() === true) {
            // Save the data to a database
            return "Data saved successfully";
        } else {
            return $this->validate();
        }
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function displayInfo()
    {
        echo "Name: " . $this->name . "\r\n";
        echo "Age: " . $this->getAge() . "\r\n";
        echo "Phone: " . $this->phone . "\r\n";
        echo "Email: " . $this->email . "\r\n";
        echo "Social Media: " . "\r\n";
        foreach ($this->social_media as $key => $val) {
            echo $key . ": " . $val . "\r\n";
        }
    }
}
?>