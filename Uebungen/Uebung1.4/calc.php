<?php

function calc()
{

$number1 = intval($_GET['number1']);
$number2 = intval($_GET['number2']);
$mode = $_GET['mode'];

if($mode == "plus")
{
    return $number1 + $number2;
}
if($mode == "minus")
{
    return $number1 - $number2;
    
}
if($mode == "mal")
{
    return $number1 * $number2;
    
}
if($mode == "div")
{
    return $number1 / $number2;
    
}


}
$output = calc();
echo "<H1>$output</H1>"

?>