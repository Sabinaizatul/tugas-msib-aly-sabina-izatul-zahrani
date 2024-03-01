<?php
class Computer {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function turnOn() {
        echo "Komputer " . $this->getBrand() . " menyala.<br>";
    }
}

class Laptop extends Computer {
    private $screenSize;

    public function __construct($brand, $screenSize) {
        parent::__construct($brand);
        $this->screenSize = $screenSize;
    }

    public function getScreenSize() {
        return $this->screenSize;
    }

    public function turnOn() {
        parent::turnOn();
        echo "Ukuran layarnya adalah " . $this->getScreenSize() . ".<br>";
    }
}

$laptop1 = new Laptop("Dell", 15.6);

echo $laptop1->getBrand();
echo "<hr>";

$laptop1->turnOn();
?>