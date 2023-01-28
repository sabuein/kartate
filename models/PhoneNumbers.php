<?php
class PhoneNumbers {
    private string $home;
    private string $work;
    private string $mobile;

    public function __construct(string $home = null, string $work = null, string $mobile = null) {
        $this->home = $home ?? "na";
        $this->work = $work ?? "na";
        $this->mobile = $mobile ?? "na";
        return $this;
    }

    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString() {
        return "Home: $this->home, Work: $this->work, Mobile: $this->mobile";
    }
}
?>