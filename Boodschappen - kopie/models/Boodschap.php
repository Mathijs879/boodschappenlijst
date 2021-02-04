<?php

class Boodschap {
    public $subTotal;

    function __construct() {
        $this->subTotal = 0;   
    }
    
    function getSubTotal() {
        return $this->price * $this->number;
    }

    function getName() {
        return $this->name;
    }

}

?>