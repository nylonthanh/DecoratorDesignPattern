<?php
/**
 * CLIENT
 * add or remove services
 * the cost returned's results are dependant on class injected into instantiation of new object.
 * uses an interface
 *
 * note usage of autoloader
 * note the usage of wrapping new objects and injecting other objects into it
 * since this is done at the client class, this is done at run-time
 */
require 'vendor/autoload.php';

use AutoService\AutoCustomer,
    AutoService\SmogTest,
    AutoService\OilChange,
    AutoService\StateInspection;


$mikeyRates = new AutoCustomer();
$repair = new SmogTest(new OilChange(new StateInspection($mikeyRates)));

print_r($repair->getCost());
print_r($repair->getDescription());
