<?php
function isChecked($inputeName, $value)
{   
    if(isset($_REQUEST[$inputeName]) && is_array($_REQUEST[$inputeName]) && in_array($value,$_REQUEST[$inputeName])) 
    {
        echo "checked";
    }
}