<?php

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