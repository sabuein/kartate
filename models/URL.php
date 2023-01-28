<?php
class URL
{
    private array $links;

    public function __construct($arguments)
    {
        for ($i = 0; $i < count($arguments); $i++):
            $this->links[$i] = $arguments[$i];
        endfor;
        return $this;
    }
}
?>