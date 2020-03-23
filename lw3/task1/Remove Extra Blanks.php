<?php

header("Content-Type: text/plain");
$name = $_GET['text'];
$length = strlen($name);
$name = trim($name, ' ');
$blank = ' ';
$x = strpos($name, ' ');
for ($k = 0; $k <= $length; $k++)
{
    $outString = substr($name, 0, $x);
    echo $outString.$blank;
    $name = str_replace($outString, '', $name);
    $name = substr_replace($name, ' ', strlen($outString));
    $x = strpos($name, ' ');

}   
    


  



