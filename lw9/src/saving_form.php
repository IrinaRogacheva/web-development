<?php

function checking($inputs): array
{
    $errors = [];
    $isNameValidate = preg_match("/^[a-zа-я]+[a-zа-я\s\-]*$/ui", $inputs['name']);
    $isEmailValidate = filter_var($inputs['email'], FILTER_VALIDATE_EMAIL);

    if (!$isNameValidate) {
        $errors['name'] = true;
    }
    if (!$isEmailValidate) {
        $errors['email'] = true;
    }
    if ($isNameValidate && $isEmailValidate)
    {
        $errors['success'] = true;
    }
    return $errors;
}
function sendResponse(): void
{
    $inputs = file_get_contents('php://input');
    $inputs = json_decode($inputs, true);
    $errors = checking($inputs);
    $errors = json_encode($errors);
    echo $errors;
}

sendResponse();

function saveFeedbackPage()
{
    $inputs = file_get_contents('php://input');
    $inputs = json_decode($inputs, true);
    $name = $inputs['name'];
    $email = $inputs['email'];
    $country = $inputs['country'];
    $gender = $inputs['gender'];
    $message = $inputs['message'];

    function printCountry($country)
    {
        if ($country === 'rus') {
            $country = 'Россия';
        } elseif ($country === 'bel') {
            $country = 'Белорусия';
        } else {
            $country = 'Украина';
        }
        return ($country);
    }

    function printGender($gender)
    {
        if ($gender === 'male') {
            $gender = 'Мужской';
        } elseif ($gender = 'female') {
            $gender = 'Женский';
        }
        return ($gender);
    }

    $errors = checking($inputs);

    if ($errors['success'])
    {
        $country = printCountry($country);
        $gender = printGender($gender);
        $data = ['name' => $name, 'gender' => $gender, 'country' => $country, 'message' => $message];
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $file = "../data/" . mb_strtolower($email) . ".json";
        file_put_contents($file, $data);
    }
}

saveFeedbackPage();
