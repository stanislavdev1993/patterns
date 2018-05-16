<?php

namespace abstract_factory\factories;

use abstract_factory\door_fitting_experts\DoorFittingExpert;
use abstract_factory\doors\DoorInterface;

interface DoorFactoryInterface
{
    public function makeDoor(): DoorInterface;
    public function makeFittingExpert(): DoorFittingExpert;
}