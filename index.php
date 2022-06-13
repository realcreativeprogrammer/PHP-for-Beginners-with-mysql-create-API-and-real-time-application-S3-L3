<?php
class Car{
    public $name;
    public $color;
    public $make;

    function __construct($carName,$carMake,$carColor){
        $this->name=$carName;
        $this->color=$carColor;
        $this->make=$carMake;
    }

    function print(){
        echo 'the car name is '.$this->name.' and the color is '.$this->color.' and maked by '.$this->make; 
    }
}

$obj=new Car('golf','volgswagn','green');
$obj->print();
echo '<br>'.$obj->name.'<br>';

$obj=new Car('mustang','ford','red');
$obj->print();
echo '<br>'.$obj->name;
?>