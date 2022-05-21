<?php
  class MathCalculator 
  {
    private $number;
    static $name;
    static function fibonacci($n) 
    {
        echo self::$name = $n."<br>";
    }

    static function doSomething()
    {
      echo "Do Something"."<br>";
    }
    
    // normal function 
    function factorial($n)
    {
      self::$name = "ABCD";
      self::doSomething();
      $this->doSomething();
      // $this->name;  //wrong
      echo $this->number = 12;
      echo "<br>";
      echo "calculating factorial of {$n}<br>";
    }
  }
  $obj = new MathCalculator();
  $obj->factorial(8);
  // We can access static method and properties this way
  MathCalculator::fibonacci("Chayan");
  echo MathCalculator::$name;
?>
