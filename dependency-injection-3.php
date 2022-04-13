<?php
  // class Driver 
  // {
  //   // if Driver dependency is vehicale.So
  //   protected $vehicle; // properties

  //   public function __construct(VehicleInterface $vehicle)
  //   {  
  //     $this->vehicle = $vehicle;
  //   }

  //   public function showVehicle()
  //   {
  //      $this->vehicle->start();
  //   }
  // }
  
  // // This dependency class for driver
  // class Bike implements VehicleInterface
  // {
  //   public function start()
  //   {
  //     print "Bike is started";
  //   }
  // }
  
  // class Car implements VehicleInterface
  // {
  //   public function start()
  //   {
  //     print "Car is started";
  //   }
  // }

  // interface VehicleInterface
  // {
  //   public function start();
  // }  

  // $car = new Car();
  // $bike = new Bike();
  // $driver = new Driver($car);
  // $driver->showVehicle();

  // Real life example
  class User 
  {
    protected $db;
    public function __construct(DBInterface $db)
    { 
      // print_r($db); 
      $this->db = $db;
    }

    public function showUserConnectedDb()
    {
      $this->db->connect();
    }
  }

  class MySql implements DBInterface
  {
    public function connect()
    {
      echo "MySql connect";
    }
  }
  
  class PostgreSql implements DBInterface
  {
    public function connect()
    {
      echo "PostgreSql connect";
    }
  }

  interface DBInterface
  {
    public function connect();
  }

  $mysql = new Mysql();
  $postgreSql = new PostgreSql();
  $user = new User($postgreSql);
  $user->showUserConnectedDb();
?>