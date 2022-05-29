<?php
function displayOption($options, $selectedValues)
{   
    foreach($options as $value)
    {   
        $selected = '';
        if( isset($selectedValues) && in_array($value, $selectedValues) ) {
            $selected = 'selected';
        }
       
        printf('<option value="%s", %s> %s </option>\n', strtolower($value), $selected, ucwords($value));
    }
}
?>