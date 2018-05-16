<?php

namespace abstract_factory\doors;

class WoodenDoor implements DoorInterface
{
    public function getDescription()
    {
        return 'Wooden door';
    }
}