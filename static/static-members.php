<?php
  class Base {
    public static $name;
    
    public function __construct($n) {
      self::$name = $n;  
    }
    
    public static function show () {
      // echo $this->name; //this is wrong.because static method or property can access by self keyword
      echo self::$name;
    }
  }

  // now try to inherit
  class Child extends Base {
    public function __construct($n) {
      parent::__construct($n);
    }

    // method override
    public static function show () {
      echo "I am come form parent";
    }

    public function display() {
      echo "<br>".parent::$name.",\nI am coming from child class";
    }
    
    
  }
  
  // we are show this 
  // echo Base::$name."<br>";
  // Base::show();

  // $obj = new Base("Wow");
  // $obj->show();
  // obj for child class
  $obj2 = new Child("Kopil"); 
  $obj2->display();
  echo "<br>";
  Child::show();
?>