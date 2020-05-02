<?php

$email = $_GET['email'];
$file = ("data/" . $email . ".txt");

if (!(file_exists($file)))
{
     echo 'Введен неверный email';
}
else
{
    $keys = ['First_name', 'Last_name', 'Email', 'Age'];
    $data = file_get_contents("$file");
    $data = explode("|", $data);
    $data = array_combine($keys, $data);
    foreach($data as $key => $value)
    {
        echo "$key: $value<br>";
    }
}


