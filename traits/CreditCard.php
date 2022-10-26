<?php

require_once __DIR__ . '/../traits/RestrictSetter.php';

trait CreditCard
{

    use RestrictSetter;

    public $current_year;
    public $current_month;

    private $number;
    private $expiration_year;
    private $expiration_month;
    private $security_code;

    public function addCreditCard($_number, $_expiration_year, $_expiration_month, $_security_code)
    {
        $this->current_year = date('Y');
        $this->current_month = date('m');

        if (($_expiration_year < $this->current_year) || ($_expiration_year = $this->current_year && $_expiration_month >= $this->current_month)) {
            throw new Exception('Error: you credit card is expired! Please, enter a valid credit card');
        }

        $this->number = $_number;
        $this->expiration_year = $_expiration_year;
        $this->expiration_month = $_expiration_month;
        $this->security_code = $_security_code;

        echo 'Valid credit card inserted!';
    }
}
