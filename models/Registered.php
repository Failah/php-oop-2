<?php
require_once __DIR__ . '/User.php';

class Registered extends User
{
    public $nickname;
    public $email;

    private $password = '';
    private $registered;

    function __construct($_nickname, $_email, $_password)
    {
        $this->nickname = $_nickname;
        $this->email = $_email;
        $this->password = $_password;
        $this->getDiscount();
    }

    protected function getDiscount()
    {
        $this->discount = 20;
    }
}
