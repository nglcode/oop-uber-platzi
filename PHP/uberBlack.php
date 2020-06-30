<?php
require_once('car.php');

class UberBlack extends Car {
    public $seatsMaterial;
    public $typeCardAccepted;

    public function __construct($licence, $driver, $typeCardAccepted, $seatsMaterial) {
        parent::__construct($licence, $driver);
        $this->typeCardAccepted = $typeCardAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}