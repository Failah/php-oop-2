<?php

trait Weight {
    public $weight = 0;
    
    public function calcWeight(){
        return $this->weight . 'Kilograms';
    }
}
