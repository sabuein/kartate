<?php
class URL
{
    private array $links;

    public function __construct($arguments)
    {
        for ($i = 0; $i < count($arguments); $i++):
            $this->links[$i] = "<a href=\"$arguments[$i]\" target=\"_blank\">$arguments[$i]</a>";
        endfor;
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
        return implode(", ", $this->links);
    }
}
?>