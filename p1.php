<!DOCTYPE html>
<html>
<head>
  <title>Class</title>
</head>
<body>
<a href="/php(oop-practice)/constructor-with-class.php">
  <button>P-2</button>
</a> <br><br>
<?php
  class Student
  {  
     public $name;
     public $roll;
     public $shift;
     public $address;

     function getStudentInfo() {
        echo "My name is {$this->name}\n. My Roll and shift is {$this->roll} {$this->shift}\n. I am from {$this->address}\n";
        echo "<br>";
        echo "<br>";
        echo "<br>";
     }
  }
  
  // property set
  $studentObj = new Student();
  $studentObj->name = "Chayan";
  $studentObj->roll = 20211203024;
  $studentObj->shift = "2nd";
  $studentObj->address = "Mirpur,Dhaka";
  // all property get by function
  $studentObj->getStudentInfo();

  //indivitual property get
  echo "Indivitual property get:: {$studentObj->name}";
  echo "<br>";
  echo "<br>";

  // now same class multiple object example
  echo "Now same class multiple object example";  echo "<br>";echo "<br>";
  class Chayan {
     public $motherName;
     public $fatherName;

     public function getMotherName() {
        echo "My mother name is {$this->motherName} and";
     }

     public function getFatherName() {
       echo " My father name is {$this->fatherName}";
     }

     public function getResult() {
        $this->getMotherName();
        $this->getFatherName();
     }
  }

  $obj1 = new Chayan();
  $obj2 = new Chayan();
  // for first obejct
  $obj1->motherName = "Sheuli";
  $obj1->fatherName = "Provas";
  $obj1->getResult();
  echo "<br>";
   // for second obejct
  $obj2->motherName = "Dadi";
  $obj2->fatherName = "Dada";
  $obj2->getResult();
?>
</body>
</html>
