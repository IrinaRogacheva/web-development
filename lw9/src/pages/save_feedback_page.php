<?php

function saveFeedbackPage()
{
    function sendResponse(): void
    {
        $inputs = json_decode(file_get_contents('php://input', true));
        $errors = json_encode($inputs, true);
        echo $errors;
    }

    sendResponse();

    $name = getPostParameter('name');
    $email = getPostParameter('email');
    $gender = getPostParameter('gender');
    $country = getPostParameter('country');
    $message = getPostParameter('message');
    $feedback = [];

    function printCountry($country)
    {
        if ($country === 'rus')
        {
            $country = 'Россия';
        }
        elseif ($country === 'bel')
        {
            $country = 'Белорусия';
        }
        else
        {
            $country = 'Украина';
        }
        return($country);
    }

    function printGender($gender)
    {
        if ($gender === 'male')
        {
            $gender = 'Мужской';
        }
        elseif ($gender = 'female')
        {
            $gender = 'Женский';
        }
        return($gender);
    }

    if (empty($name))
    {
        $feedback['name_error_msg'] = 'Вы забыли указать ваше имя';
    }
    if (empty($email))
    {
        $feedback['email_error_msg'] = 'Вы забыли указать адрес вашей электронной почты';
    }
     if (empty($message))
    {
         $feedback['message_error_msg'] = 'Вы забыли написать мне сообщение';
     }

    if (!(empty($name)) && !(empty($email)) && !(empty($message)))
    {
        $feedback['success'] = 'Ваше сообщение принято!';
        $country = printCountry($country);
        $gender = printGender($gender);
        $data = [$name, $gender, $country, $message];
        $data = implode("|", $data);
        $file = "../src/data/" . mb_strtolower($email) . ".txt";
        file_put_contents($file, $data);
    }

    $feedback['name'] = $name;
    $feedback['email'] = $email;
    $feedback['gender'] = $gender;
    $feedback['country'] = $country;
    $feedback['message'] = $message;

    renderTemplate('main.tpl.php', $feedback);
}