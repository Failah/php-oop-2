<?php

require_once __DIR__ . '/../traits/RestrictSetter.php';
require_once __DIR__ . '/../traits/CreditCard.php';

class User
{

    use RestrictSetter;

    use CreditCard;

    public $id;

    protected $discount = 0;
}
