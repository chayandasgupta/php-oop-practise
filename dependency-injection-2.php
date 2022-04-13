<?php
  class Driver 
  {
    // if Driver dependency is vehicale.So
    protected $vehicle; // properties

    public function __construct(Car $vehicle)
    {  
      // print_r($vehicle->start());
      $this->vehicle = $vehicle;
    }

    public function showVehicle()
    {
       $this->vehicle->start();
    }
  }
  
  // This dependency class for driver
  class Bike
  {
    public function start()
    {
      print "Bike is started";
    }
  }
  
  class Car
  {
    public function start()
    {
      print "Car is started";
    }
  }
  
  $car = new Car();
  $bike = new Bike();
  $driver = new Driver($car);
  $driver->showVehicle();
?>