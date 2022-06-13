<?php
trait First 
{
    public function seriesA() 
    {
        echo "Series A";
    }

    public function seriesB()
    {
        echo "Series B";
    }
}

class SomeClass
{
    public function seriesA() 
    {
        echo "Series A from someclass";
    }
}

class Series extends SomeClass
{
    use First;
    
    public function seriesA() 
    {
        echo "Series A from base";
    }
}   

$obj = new Series();
$obj->seriesA();
?>