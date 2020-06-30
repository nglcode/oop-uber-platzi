<?php

class UberVan extends Car {
    public $typeCardAccepted;
    public $seatsMaterial;

    public function __construct($licence, $driver, $seatsMaterial, $typeCardAccepted) {
        parent::__construct($licence, $driver);
        $this->seatsMaterial = $seatsMaterial;
        $this->typeCardAccepted = $typeCardAccepted;
    }
}