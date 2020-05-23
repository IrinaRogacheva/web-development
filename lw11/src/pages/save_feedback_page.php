<?php

function saveFeedbackPage()
{
    $name = getPostParameter('name');
    $email = getPostParameter('email');
    $gender = getPostParameter('gender');
    $country = getPostParameter('country');
    $message = getPostParameter('message');
    $feedback = [];

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

    function saveFeedback(array $feedback): void
    {
        $connection = database();
        foreach ($feedback as &$field)
        {
            $field = $connection -> quote($field);
        }
        $sql = "INSERT INTO senders (name, email, country, gender, message) VALUES (${feedback['name']}, ${feedback['email']}, ${feedback['country']}, ${feedback['gender']}, ${feedback['message']})";
        $connection -> query($sql);
    }

    if (!(empty($name)) && !(empty($email)) && !(empty($message))) {
        $country = printCountry($country);
        $gender = printGender($gender);

        $feedback['name'] = $name;
        $feedback['email'] = $email;
        $feedback['gender'] = $gender;
        $feedback['country'] = $country;
        $feedback['message'] = $message;

        if (!getFeedback($email))
        {
            $feedback['success'] = 'Ваще сообщение отправлено!';
            saveFeedback($feedback);
        }
        else
        {
            ($feedback['email_error_msg'] = 'Такой email уже существует' );
        }
    }
    renderTemplate('main.tpl.php', $feedback);
}