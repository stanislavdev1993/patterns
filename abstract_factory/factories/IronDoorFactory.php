<?php

namespace abstract_factory\factories;


use abstract_factory\door_fitting_experts\DoorFittingExpert;
use abstract_factory\doors\DoorInterface;
use abstract_factory\doors\IronDoor;
use abstract_factory\door_fitting_experts\Welder;

class IronDoorFactory implements DoorFactoryInterface
{
    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}