<?php

namespace simple_factory;

use simple_factory\factories\TableFactory;

class Test
{
    protected $tableFactory;

    public function __construct(TableFactory $tableFactory)
    {
        $this->tableFactory = $tableFactory;
    }

    public function test()
    {
        $table = $this->tableFactory->createTable('black');

        echo $table->getColor();
    }
}