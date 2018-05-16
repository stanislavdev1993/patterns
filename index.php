<?php

require 'simple_factory/tables/TableInterface.php';
require 'simple_factory/tables/IronTable.php';
require 'simple_factory/tables/WoodenTable.php';
require 'simple_factory/factories/TableFactory.php';
require 'simple_factory/Test.php';

$testObj = new \simple_factory\Test(new \simple_factory\factories\TableFactory());

$testObj->test();