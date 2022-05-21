<?php
	
	// when inside class is any method is abstract method ,than class must be abstruct otherwise it show error
	abstract class Father
	{    
		// not allow to create construct method in abstract class
		// function __construct(){}

		// we can use normal function inside abstract class
		public function sayHi()
		{
			echo "Hello";
		}

		// in abstruct class abstract method not defind, only declare
		// abstract public  function info (){}    // wrong
		abstract public function info();   //right

		abstract protected function info2();

		abstract protected function info3();   

		/**
		 *  In abstract class we cannot declare private method because if we declare private method in abstract class this method is not extend or exccess by sub class..
		    so its return error
		    Another problem is when method is abstract then this method is must be implement in child class.so if its private not possible to access in child
		*/
		// abstract private function info2();    
	}

	/**
	 * 
	 */
	class Son extends Father
	{
			
		function info() {
			echo "Hi Info";
		}

		protected function info2(){
			echo "Hi Info2";
		}

		// jodi amra abstract method k implment kore body khali rakte cai ta ow kora jabe.tobe implement kore nitei hobe
		protected function info3(){}

	}
    
    // Create object for child class. For access child & parent or base class method , property. 
	$childClass = new Son();
	// normal function of abstract class
	$childClass->sayHi();
	echo "<br>";
	$childClass->info(); 

?>