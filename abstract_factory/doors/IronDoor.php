<?php

namespace abstract_factory\doors;

class IronDoor implements DoorInterface
{
    public function getDescription()
    {
        return 'Iron door';
    }
}