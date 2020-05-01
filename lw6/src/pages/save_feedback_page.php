<?php

function saveFeedbackPage() {
    $name = getPostParameter('name');
    $email = getPostParameter('email');
    $gender = getPostParameter('gender');
    $country = getPostParameter('country');
    $message = getPostParameter('message');
    $feedback = [];

    if (empty($name)) {
        ($feedback['name_error_msg'] = 'Вы забыли указать ваше имя');
    }
    if (empty($email)) {
        ($feedback['email_error_msg'] = 'Вы забыли указать адрес вашей электронной почты');
    }
     if (empty($message)) {
         ($feedback['message_error_msg'] = 'Вы забыли написать мне сообщение');
     }

    if (!(empty($name)) && !(empty($email)) && !(empty($message))) {
        $feedback['success'] = 'Ваше сообщение принято!';
    }

    $feedback['name'] = $name;
    $feedback['email'] = $email;
    $feedback['gender'] = $gender;
    $feedback['country'] = $country;
    $feedback['message'] = $message;

    if ($country ===  'rus') {
        $country = 'Россия';
    } elseif ($country === 'uk') {
        $country = 'Украина';
    } else {
        $country = 'Беларусь';
    }

    if ($gender === 'male') {
        $gender = 'Мужской';
    } else {
        $gender = 'Женский';
    }
    $data = [
        $name, '|', $gender,'|', $country,'|', $message
    ];

    $file = "../src/data/" . mb_strtolower($email) . ".txt";
    file_put_contents($file, $data);

    renderTemplate('main.tpl.php', $feedback);
}