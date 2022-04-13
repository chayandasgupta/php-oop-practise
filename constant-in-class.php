<?php
  // constant in class
  class MyClass {
    const CITY = "Dhaka";

    function sayHi() {
      echo self::CITY;
    }
  }

  $obj = new MyClass();
  // $obj->CITY; //this is retaurn error because its const not public
  echo MyClass::CITY; 
  echo "<br>"; 
  //or
  $obj->sayHi();
?>