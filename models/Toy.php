<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/Weight.php';

class Toy extends Product
{
    public $animal;
    public $materials = [];

    use Weight;

    // lo so che sembrano cose a caso ma è per provare a fare qualcosa, non ho molte idee belle al momento
    public function addMaterial($value)
    {
        if (!in_array($value, $this->materials)) {
            $this->materials[] = $value;
        }
    }
}
