<?php

namespace abstract_factory\door_fitting_experts;

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        return 'Working with wooden door';
    }
}