<?php
  // Property value set and get by php __get() & __set() method
  class Base {
    private $name;
    private $age;
    private $class;
    
    // public function __construct($name = "", $age = "", $class = "")
    // {
    //   $this->name = $name;
    //   $this->age = $age;
    //   $this->class = $class;
    // }
    
    //use __set magic method
    public function __set($prop, $value)
    { 
      return $this->$prop = $value;
    }

    //use __get magic method
    public function __get($prop)
    { 
      return $this->$prop;
    }
  }

  $obj = new Base();
  $obj->name = "dsad";
  $obj->age = "23";
  $obj->class = "45";
  echo $obj->name."<br>";
  echo $obj->age."<br>";
  echo $obj->class."<br>";
  
  //  =========== INVOKE MEGIC METHOD ===========
  // The magic method __invoke() is called when you try to execute an object as a function

  class Square 
  {
    public function __invoke($var)
    {
      return $var ** 3; // (**) means power
    }
  }

  $callAbleObject = new Square();
  echo $callAbleObject(5)."<br>";


  // ================== __toString magic method =====================
  class Color
  {
    public $color;

    public function __construct($color)
    {
      $this->color = $color;
    }

    public function __toString()
    {
      return "The color is {$this->color}";
    }
  }

  $colorObj = new Color('Red');
  echo $colorObj;
  
  // ======================== LIST ALL OF MAGIC METHODS IN PHP ======================
  // __get
  // __set
  // __isset
  // __unset
  // __call
  // __callStatic
  // __invoke
  // __debugInfo
  // __construct
  // __destruct
  // __sleep
  // __wake
  // __toString
  // __clone
  //__tostring
?>