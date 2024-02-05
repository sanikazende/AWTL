
<?php

class Car
{
    public $brand;
    public $color;
    public $model;

  
    public function __construct($brand, $color, $model)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
        echo "A new $this->color $this->brand $this->model created.<br>";
    }

    public function displayInfo()
    {
        echo "This is a $this->color $this->brand $this->model.<br>";
    }

  
    public function __destruct()
    {
        echo "The $this->color $this->brand $this->model is being destroyed.<br>";
    }
}


class SportsCar extends Car
{
    public $speed;

    
    public function __construct($brand, $color, $model, $speed)
    {
        parent::__construct($brand, $color, $model);
        $this->speed = $speed;
    }

    public function displayInfo()
    {
        echo "This is a $this->color $this->brand $this->model and can speed up to $this->speed mph.<br>";
    }
}

$car1 = new Car("Toyota", "red", "Camry");
$car1->displayInfo();

$sportsCar1 = new SportsCar("Ferrari", "red", "458 Italia", 200);
$sportsCar1->displayInfo();
?>

