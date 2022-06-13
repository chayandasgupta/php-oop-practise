<?php
trait First 
{
    private function seriesA() 
    {
        echo "Series A from first trait"."<br>";
    }

    public function seriesB()
    {
        echo "Series B";
    }
}

trait second 
{
    public function seriesA() 
    {
        echo "Series A from second trait";
    }
}

// class SomeClass
// {
//     public function seriesA() 
//     {
//         echo "Series A from someclass";
//     }
// }

// class Series extends SomeClass
// {   
//     // Use alies
//     use First {
//        seriesA as public seriesAA;  // When access private method then use this
//     }
    
//     public function seriesA() 
//     {
//         echo "Series A from base";
//     }
// }   

// When multiple trait accept same method then how to run all method indivitually
class Series
{   
    // Use alies & use multiple trait with same method & access all method
    use First, second {
       First::seriesA as public seriesAA;  // When access private method then use this
       Second::seriesA as seriesAAA;  // When access private method then use this
    }
    
    public function seriesA() 
    {
        echo "Series A from base";
    }
}   

$obj = new Series();
$obj->seriesAA();
$obj->seriesAAA();
?>