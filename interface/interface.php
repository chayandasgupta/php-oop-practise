<?php
  //interface class
  interface BaseAnimal {
    function isAlive();
    function canEat($param1, $param2);
    function breed();
  }  

  // When implement interface class , must implement all method from iterface class
  class Animal implements BaseAnimal {
    function isAlive() {}
    function canEat($param1, $param2) {}
    function breed() {}
  }
  
  // note: a interface class extends another interface class.
  interface BaseHuman extends BaseAnimal {
    function canTalk();
  }

  // class Human extends BaseHuman {}   // This is wrong.Because interface not extend able in another normal class.

  // class Human implements BaseHuman {
  //   // 3 method come from BaseAnimal interface class. because basehuman extends baseanimal
  //   function isAlive() {}
  //   function canEat($param1, $param2) {
  //     echo $param1.'      '.$param2;
  //   }
  //   function breed() {}
  //   function canTalk() {
  //       echo "Yes,Talk";
  //   }
  // }

  // create obj for animal
  $obj2 = new Animal();
  $obj2 instanceof Human;  // Ans: 0/false
   
  // Interface with abstract class
  abstract Class AbstractHuman implements BaseHuman {
    abstract public function run();
    function eat() {
       echo "I am eatting";
    }
  } 

  class Human extends AbstractHuman {
      // 3 Method come from BaseAnimal interface class. because basehuman extends baseanimal
      function isAlive() {}
      function canEat($param1, $param2) {
        echo $param1.'      '.$param2;
      }

      function breed() {}
      function canTalk() {
          echo "Yes,Talk";
      }

      function run() {
        echo "I am running";
      }
  }

  $obj = new Human();
  echo $obj instanceof Animal;   // Ans: 0/false
  echo $obj instanceof BaseAnimal;   // Ans: 1/true
  echo '<br>';
  echo $obj instanceof BaseHuman;   // Ans: 1/true
  echo '<br>';
  $obj->canTalk();
  echo '<br>';
  $obj->canEat('May hu param-1', 'May hu param-2');
  echo '<br>';
  $obj->run();
?>