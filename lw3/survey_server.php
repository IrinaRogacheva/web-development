<?php

$firstName = (isset($_GET['first_name'])) ? $_GET['first_name'] : ' ';
$lastName = (isset($_GET['last_name'])) ? $_GET['last_name'] : ' ';
$email = (isset($_GET['email'])) ? $_GET['email'] : ' ';
$age = (isset($_GET['age'])) ? $_GET['age'] : ' ';
if (!empty($email))
{
    $data = [$firstName, $lastName, $email, $age];
    $data = implode("|", $data);
    $file = "data/" . $email . ".txt";
    file_put_contents($file, $data);
}