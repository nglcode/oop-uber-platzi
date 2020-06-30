<?php
require_once 'account.php';

class Car {
    public $id;
    public $licence;
    public $driver;
    public $passenger;

    public function __construct($licence, $driver) {
        $this->license = $licence;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo '<div> License: '. $this->license . '</div>';
        echo '<div> Account: '. $this->driver->name . '</div>';

    }

}