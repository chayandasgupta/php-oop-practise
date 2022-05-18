<?php
class Planet
{
  static function echoName()
  { 
    // echo self::getName();
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