<?php
$strValue  = "Hello World";

// Way 1
echo strrev($strValue)."<br>";

// Way 2
$strLength = strlen($strValue)-1;
for($i=$strLength;$i>=0; $i--) {
    echo $strValue[$i];
}

echo PHP_EOL;
echo "<br>";

//way 3
$length = strlen($strValue);
for($i = 1; $i <= $length; $i++)
{
    echo $strValue[$i * -1];
}

echo "<br>";
$name = 'chayan';
$roll = 12;

echo $name, $roll."<br>";

printf("he is %s %s", $name, $roll);
echo "<br>";
echo($name), ($roll);