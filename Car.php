<?php

require_once 'LightableInterface.php';

class Car implements LightableInterface
{
    public function switchOn(): bool
    {   
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}