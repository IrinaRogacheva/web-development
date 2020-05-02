<?php

$identifier = $_GET['identifier'];
echo 'Is ' . $identifier . ' identifier? ';
if (preg_match('/[aA-zZ]/', $identifier{0}))
{
    if (preg_match("/^[aA-zZ0-9]+$/", $identifier))
    {
        echo 'Yes, it starts from letter and has only digits and letters';
    } 
    else 
    {
        echo 'No, it has else symbols';       
    } 
}
else 
{
    if (preg_match("/^[aA-zZ0-9]+$/", $identifier))
    {
        echo 'No, it starts from digit';
    } 
    else 
    {
        echo 'No, it starts from digit and has else symbols';       
    }       
} 
