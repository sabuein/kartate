<?php
class SocialMedia
{
    private string $facebook;
    private string $twitter;
    private string $instagram;

    public function __construct(string $facebook = null, string $twitter = null, string $instagram = null)
    {
        $this->facebook = $facebook ?? "na";
        $this->twitter = $twitter ?? "na";
        $this->instagram = $instagram ?? "na";
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
        return "$this->facebook, $this->twitter, $this->instagram";
    }
}
?>