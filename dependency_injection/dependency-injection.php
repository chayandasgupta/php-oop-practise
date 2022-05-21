<?php
  class Driver 
  {
    // if Driver dependency is vehicale.So
    protected $vehicle; // properties

    public function __construct(Vehicle $vehicle)
    {  
      print_r($vehicle->start());
      $this->vehicle = $vehicle;
    }

    public function showVehicle()
    { 
      // print_r($this->vehicle);
      // echo "<br>";
      // echo $this->vehicle;
    }
  }
  
  // This dependency class for driver
  class Vehicle
  { 
    protected $engine;

    public function __construct($engine)
    { 
      // print_r($engine->show()); //output is hi
      $this->engine = $engine;
    }

    public function start()
    {
      print "Hi i am vehicle";
    }
  }

  // This dependency class for vehicle
  class Engine 
  {
    public function show() {
      echo "hi, i am  engine";
    }
  }
  
  $engine  = new Engine();
  $vehicle = new Vehicle($engine);
  $driver = new Driver($vehicle);
  $driver->showVehicle();
?>