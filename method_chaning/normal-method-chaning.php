<?php

// When many methods are called in a single instruction, in PHP’s term it is called Method Chaining

//if there are multiple functions in a class then we can create a single object and call all the functions at the same time.
//but every function should return $this at the end.

class StringUtility
{
    private $string; //hello earth
    private $search;

    public function __construct($string) 
    {
        $this->string = $string;  // Here string = "Hello World"
    }
    
    // This method for which keyword we search and store this keyword in search property
    public function search($searchKey) // jeita search hisabe carchi world
    {
        $this->search = $searchKey;
        return $this;  // This line use for return StringUtility object
    }
    
    // This method for replace word where we need to replace 
    public function replace($replaceKey)
    {   
        // First need to check this is search method set or not
        if (!isset( $this->search )) 
        {
            throw new Exception("Not set this method");
        } 
        else 
        {
            $this->string = str_replace($this->search, $replaceKey, $this->string); // $this->search means which word we find & $replacekey means which word to replace to previous word & $this->string refers to the place there string search and replace by new word
            $this->search = "";
            return $this;
        }
    }

    public function strLowerCase()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function strUpperCase()
    {
        $this->string = strtoUpper($this->string);
        return $this;
    }

    public function print()
    {
        echo $this->string;
    }
}

$obj = new StringUtility("Hello World"); 
$obj->search('World')->replace('Earth')->strLowerCase()->strUpperCase()->print();
?>