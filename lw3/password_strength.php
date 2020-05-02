<?php

if ($_GET['password'])
{
    $password = $_GET['password'];
    $strength = 0;
    $len = strlen($password);
    if (preg_match("/^[aA-zZ0-9]+$/", $password))
    {
        $strength = 4*$len;

        if (preg_match_all( '/[0-9]/', $password, $digits))
        {
            $n = count($digits[0]);
            $strength += $n*4;
        }

        if (preg_match_all( '/[A-Z]/', $password, $capitalLetters))
        {
            $n = count($capitalLetters[0]);
            $strength += ($len-$n)*2;
        }

        if (preg_match_all( '/[a-z]/', $password, $smallLetters))
        {
            $n = count($smallLetters[0]);
            $strength += ($len-$n) * 2;
        }

        if ((preg_match("/^[aA-zZ]+$/", $password)) || (preg_match("/^[0-9]+$/", $password)))
        {
            $strength -= $len;
        }

        foreach (count_chars($password, 1) as $char => $charQuantity)
        {
            $n = $charQuantity;
            if ($n > 1)
            {
                $strength -= $n;
            }
        }
        echo "Надежность пароля равна ", $strength;
    }
    else
    {
        echo "Пароль может состоять только из цифр и букв латинской раскладки";
    }
}