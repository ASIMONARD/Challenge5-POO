<?php

require_once 'LightableInterface.php';

class Bike implements LightableInterface
{
    private $currentSpeed;

    public function __construct($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
    
    public function switchOn(): bool
    {
        return $this->currentSpeed > 10;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function currentSpeed(): int
    {
        return $this->currentSpeed;
    }
}

?>