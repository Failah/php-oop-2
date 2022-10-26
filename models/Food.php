<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/Weight.php';

class Food extends Product
{
    public $type;
    public $animal;

    use Weight;
}
