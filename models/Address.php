<?php
class Address
{
    private string $street;
    private string $city;
    private string $state;
    private string $zip;
    private string $country;

    public function __construct($street, $city, $state, $zip, $country)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
        return $this;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString()
    {
        return "$this->street, $this->city, $this->state $this->zip, $this->country";
    }
}
?>