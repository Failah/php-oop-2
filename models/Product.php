<?php

require_once __DIR__ . '/../traits/RestrictSetter.php';

class Product
{

    use RestrictSetter;

    public $name;
    public $brand;
    private $price;

    function __construct($_name, $_brand = 'Unspecified', $_price)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}
