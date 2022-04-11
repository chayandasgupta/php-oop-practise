<?php	
class Human
{   
	public $name;
	public $age;
    
    public function __construct($name, $age = 0)
    {
    	$this->name = $name;
    	$this->age  = $age;
    }

	public function sayHi() 
	{
		echo "Nomosker".'<br>';
		$this->showData();

	}

	public function showData()
	{   
		if($this->age) {
			echo "I am {$this->name}. I am {$this->age} years old".'<br>'.'<br>';
		} else {
			echo "I am {$this->name}. I have no idea to my age".'<br>'.'<br>';
		}
	}
}

$obj1 = new Human("Chayan", "20");
$obj2 = new Human("Kopil", "23");
$obj3 = new Human("Kopil");
$obj1->sayHi();
$obj2->sayHi();
$obj3->sayHi();

?>