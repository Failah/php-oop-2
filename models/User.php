<?php

require_once __DIR__ . '/../traits/RestrictSetter.php';

class User
{

    use RestrictSetter;

    public $id;

    protected $discount = 0;
}
