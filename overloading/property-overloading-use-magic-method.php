<?php
class MotorCycle
{
  //private $mileage, $displacement, $capasity;
   
  private $bikeParameters;
  public function __construct($mileage, $displacement, $capasity)
  {
    $this->bikeParameters = [];
    $this->bikeParameters['mileage'] = $mileage;
    $this->bikeParameters['displacement'] = $displacement;
    $this->bikeParameters['capasity'] = $capasity;
  }
  
  //This getter method
  // public function getValue()
  // {
  //   return $this->mileage;
  // }
  
  // // this setter method
  // public function setValue($mileage)
  // {
  //   $this->mileage = $mileage;
  // }

  // __isset magic method
  public function __isset($name)
  {
    if (!isset($this->bikeParameters[$name]))
    {
      echo "Property {$name} is not found.<br>";
      return false;
    } else {
      return true;
    }
  }

  // unset method
  public function __unset($name)
  {
    // after unset property list
    print_r($this->bikeParameters);
    echo "<br>";
    unset($this->bikeParameters[$name]);

    // before unset property list
    print_r($this->bikeParameters);
  }

  //Now method overloading system use __get() & __set()
  public function __get($propName)
  { 
    return $this->bikeParameters[$propName];
  }

  public function __set($propName, $propValue)
  { 
    return $this->bikeParameters[$propName] = $propValue;
  }
}

// When property load by construct
// $obj = new MotorCycle("150cc", "20ltr", "50kpmh");
// echo $obj->mileage."<br>";
// echo $obj->getValue();

// When property overlaod by __set and __Get method
$obj = new MotorCycle("150cc", "20ltr", "50kpmh");
$obj->mileage = "130cc"; // property value overload
$obj->displacement = "50ltr"; // property value overload
echo $obj->mileage."<br>";
echo $obj->displacement."<br>";

// when try to access not declare property, then how to fixed it
if(isset($obj->tireSize)) 
{
  echo "found"; // this property not declare in class
} else {
  echo "not found"."<br>";
}

// when we want any property from object then we used unset() magic method
unset($obj->mileage);
?>