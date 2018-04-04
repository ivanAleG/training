<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Example of use magic methods.
 */
class EntryPoint {

  /**
   * Execute example.
   */
  public function start() {

    // __construct()
    $vehicle = new Vehicle();

    // __toString()
    Printer::text($vehicle);

    // __invoke()
    $vehicle('Sport car');

    // __call()
    $vehicle->setEngine('v8', 'automatic');

    // __callStatic()
    Vehicle::setType('Airplane');

    // __unset()
    unset($vehicle->engine);

    // __set_state()
    Printer::text("\n");

    // @codingStandardsIgnoreStart
    eval(var_export($vehicle, TRUE) . ';');
    // @codingStandardsIgnoreEnd

    // __debugInfo()
    Printer::dump($vehicle);

    // __set()
    Printer::text("\n__set: Is run when writing data to inaccessible properties or a nonexistent property.\n\n");

    $vehicle->engine = 'v8';

    $vehicle->color = 'black';

    // __get()
    Printer::text("\n__get: Is run when reading data from inaccessible properties or a nonexistent property.\n\n");

    Printer::text("\tGet value of engine: " . $vehicle->engine . "\n\n");

    // __isset()
    isset($vehicle->color);

    // __sleep()
    $object_serialize = serialize($vehicle);

    Printer::text("\tObject serialized: " . $object_serialize . "\n\n");

    $object_unserialize = unserialize($object_serialize);

    Printer::text("\tWheels value: " . $object_unserialize->wheels . "\n");

    /*
     * __clone()
     *
     * when the original object is destroyed also
     * destroyed the variable that contains the clone of the variable.
     */
    $vehicle_cloned = clone $vehicle;

    Printer::dump($vehicle_cloned);

    // __destroy()
    unset($vehicle);
  }

}

// Run test.
$entryPoint = new EntryPoint();

$entryPoint->start();
