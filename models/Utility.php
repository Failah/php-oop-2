<?php

require_once __DIR__ . '/Product.php';

class Utility extends Product
{
    public $usage;
    public $premounted;

    function __construct($_usage, $_premounted)
    {
        $this->usage = $_usage;
        $this->premounted = $_premounted;
    }
}
