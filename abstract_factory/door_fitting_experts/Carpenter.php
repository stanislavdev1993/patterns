<?php

namespace abstract_factory\door_fitting_experts;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        return 'Working with iron door';
    }
}