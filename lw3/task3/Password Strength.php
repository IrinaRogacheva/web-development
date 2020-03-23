<?php

$password = $_GET('password');
$n = strlen($password);
$strength = 4*$n;
$n = preg_match_all('/\\d/', $str);