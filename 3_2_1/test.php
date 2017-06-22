<meta charset="UTF-8">

<?php
error_reporting(E_ALL);


class A
{
    public $wheels = "4";
}

interface I
{
    public function tuningCarDisks($disks);
}

class B
{
    private $color = "Белая";
    private $motor = "0.6";
    private $roof = "Без люка";
    private $disks = "Стандартные диски";


    function orderedCar ($color, $motor, $roof, $disks) {
        $this->motor = $motor;
        $this->roof = $roof;
        $this->tuningCarColor($color);
        $this->tuningCarDisks($disks);
    }

    function tuningCar ($color, $disks) {

        $this->tuningCarColor($color);

        $this->tuningCarDisks($disks);
    }

    function tuningCarColor ($color) {
        $this->color = $color;
    }

    function tuningCarDisks ($disks) {
        $this->disks = $disks;
    }
}



$obj = new B();
$obj->tuningCarDisks("12121");
echo "<pre>";
print_r($obj);
echo "</pre><hr>";
echo "<pre>";
var_dump($obj);
echo "</pre>";

