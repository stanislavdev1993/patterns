<?php

require 'simple_factory/tables/TableInterface.php';
require 'simple_factory/tables/IronTable.php';
require 'simple_factory/tables/WoodenTable.php';
require 'simple_factory/factories/TableFactory.php';
require 'simple_factory/Test.php';

$testObj = new \simple_factory\Test(new \simple_factory\factories\TableFactory());

$testObj->test();


require 'fabric_method/products/ProductInterface.php';
require 'fabric_method/products/CocaCola.php';
require 'fabric_method/products/Milk.php';
require 'fabric_method/managers/ProductManager.php';
require 'fabric_method/managers/MilkManager.php';
require 'fabric_method/managers/CocaColaManager.php';
require 'fabric_method/Test.php';

$testObj = new \fabric_method\Test(new \fabric_method\managers\CocaColaManager());

$testObj->test();