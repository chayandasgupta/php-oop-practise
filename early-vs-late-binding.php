<?php

// Early Binding: If the compiler knows at the compile-time which function is called, it is called early binding. Its also called static binding.

// Late Binding: If a compiler does not know at compile-time which functions to call up until the run-time, it is called late binding. Its also called dynamic binding.

// Note: Late Static binding korle data return hobe extends kora class thak ar jodi early binding hoi tahole data return hobe jekan thak return kortece oi class thak.

class Planet
{
  static function echoName()
  { 
    // echo self::getName();  // this is early binding
    echo static::getName(); // static diye extends kora class er method call hobe..eitai holo late binding
  } 

  static function getName()
  {
    return "Planet";
  }
}

class Earth extends Planet
{
  static function getName()
  {
    return "Earth";
  }
}

// $obj = new Planet();
Earth::echoName();
?>