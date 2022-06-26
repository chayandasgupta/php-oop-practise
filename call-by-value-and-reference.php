<!-- 
    * In Call by value method original value is not modified whereas, in Call by reference method, the original value is modified.
    * In Call by value, a copy of the variable is passed whereas in Call by reference, a variable itself is passed.
    * In Call by value, actual and formal arguments will be created in different memory locations whereas in Call by reference, actual and formal arguments will be created in the same memory location 
-->


<h2>Example of a call by value method</h2>
<hr>

<!-- Used different memory location -->
<!-- In this function $num variable show different value inside & outside function. No changes the original varible -->
<?php
    function Addnumber ($num) {
        $num = $num + 10;
        print ("Inside function: " . $num);
        echo "<br>";
    }
    $num = 10;
    addNumber($num);
    print("Outside function: " . $num);
?>

<br>    
<h2>Example of a call by reference method</h2>
<hr>

<!-- used same memory location -->
<!-- In this function $num variable show same value inside & outside function. Using reference(&) original variable value of outside function is changed when inside function varable changed -->

<!-- Swap Two Numbers using Call By Reference -->
<?php
    function swap (&$first, &$second) {
        $temp = $first;
        $first = $second;
        $second = $temp;

        echo "Inside function: <br>" . "First number is: ". $first . "<br>" . "Second Number is: ". $second ."<br><br>";
    }
    
    $a = 5;
    $b = 7;
    
    swap($a, $b);

    echo "Outside function: <br>" . "First number is: ". $a . "<br>" . "Second Number is: ". $b; 
?>
