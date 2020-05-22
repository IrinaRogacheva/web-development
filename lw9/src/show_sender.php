<?php

function showSender()
{
    $input = file_get_contents('php://input');
    $input = json_decode($input, true);
    $email = $input['email'];

    $file = ("../data/" . mb_strtolower($email) . ".json");
    if (!(file_exists($file))) {
        $data = "error";
        $data = json_encode($data);
    }
    else
    {
        $data = file_get_contents("$file");
    }
    echo $data;
}

showSender();

