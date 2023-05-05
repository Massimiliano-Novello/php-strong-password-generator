<?php
function generatePassword() {

    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!?+-*//*^?=)/&';
    $pass = ''; 
    $userNumber = $_GET["password"];
    $combLen = strlen($comb); 
    if (isset($_GET["password"])) {
        for ($i = 0; $i < $userNumber; $i++) {
            $num = rand(0, $combLen);
            $pass .= $comb[$num];
        }
    }
    return $pass;
}
