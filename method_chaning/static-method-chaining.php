<!-- Static Method Chaining is similar to General Method Chaining. 
But here for each static method, instead of writing return $this;,
 we have to write return new static;. See the example below: -->

<?php
class StringUtility
{
    private static $string;
    private static $search; 

    public static function init($string)
    {   
        self::$string = $string;
        return new static;
    }
    
    // This method for which keyword we search and store this keyword in search property
    public static function search($searchKey)
    {
        static::$search = $searchKey;
        return new static;  // This line use for return StringUtility object
    }
    
    // This method for replace word where we need to replace 
    public static function replace($replaceKey)
    {   
        // First need to check this is search method set or not
        if (!isset( self::$search )) 
        {
            throw new Exception("Not set this method");
        } 
        else 
        {
            self::$string = str_replace(self::$search, $replaceKey, self::$string); // self::$search means which word we find & $replacekey means which word to replace to previous word & self::$string refers to the place there string search and replace by new word
            self::$search = "";
            return new static;
        }
    }

    public static function strLowerCase()
    {
        self::$string = strtolower(self::$string);
        return new static;
    }

    public static function strUpperCase()
    {
        self::$string = strtoUpper(self::$string);
        return new static;
    }

    public static function print()
    {
        echo self::$string;
    }
}

// $obj = new StringUtility("Hello World");
StringUtility::init('Hello World')
::search('World')
::replace('earth')
::search('Hello')
::replace('hi')
::strLowerCase()
::strUpperCase()
::print();


echo "<br>";
// Another exmple off static method chaining

class Oop
{
    public static $val;

    public static function init($var)
    {
        self::$val = $var;
        return new static;
    }

    public static function add ($addNumber)
    {
        self::$val += $addNumber;
        return new static;
    }

    public static function minus ($minusNumber)
    {
        self::$val -= $minusNumber;
        return new static;
    }

    public static function print()
    {
        echo self::$val;
    }
}


Oop::init(20)->add(10)->minus(20)->print(); // 20+10-20 = 10
?>