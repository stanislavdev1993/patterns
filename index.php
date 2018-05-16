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


require 'abstract_factory/door_fitting_experts/DoorFittingExpert.php';
require 'abstract_factory/door_fitting_experts/Welder.php';
require 'abstract_factory/door_fitting_experts/Carpenter.php';
require 'abstract_factory/doors/DoorInterface.php';
require 'abstract_factory/doors/IronDoor.php';
require 'abstract_factory/doors/WoodenDoor.php';
require 'abstract_factory/factories/DoorFactoryInterface.php';
require 'abstract_factory/factories/IronDoorFactory.php';
require 'abstract_factory/factories/WoodenDoorFactory.php';
require 'abstract_factory/Test.php';

$testObj = new \abstract_factory\Test(new \abstrac_factory\factories\WoodenDoorFactory());

$testObj->test();


require 'builder/Burger.php';
require 'builder/BurgerBuilder.php';
require 'builder/Test.php';

$testObj = new \builder\Test(new \builder\BurgerBuilder(21));

var_dump($testObj->test());