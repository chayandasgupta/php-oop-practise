<?php
trait MyTrait
{
    static $number;
    abstract function sayHi();
}

class A
{
    use MyTrait;

    function sayHi()
    {
        echo "hi";
    }
}

class B
{
    use MyTrait;

    function sayHi()
    {
        echo "hi";
    }
}

// Access static method
A::$number = 2;
echo A::$number;

B::$number = 8;
echo B::$number;

// $obj = new A();
// echo $obj::$number;

// $obj2 = new b();
// echo $obj2::$number;
?>