<?php

namespace abstrac_factory\factories;

use abstract_factory\door_fitting_experts\DoorFittingExpert;
use abstract_factory\door_fitting_experts\Welder;
use abstract_factory\doors\DoorInterface;
use abstract_factory\doors\WoodenDoor;
use abstract_factory\factories\DoorFactoryInterface;

class WoodenDoorFactory implements DoorFactoryInterface
{
    public function makeDoor(): DoorInterface
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}