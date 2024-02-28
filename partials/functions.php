<?php
function genRandomPassword($chars, $password_length, $password){
    while(strlen($password) < $password_length){
        $index = random_int(0, strlen($chars) - 1);
        $password .= $chars[$index];
    }
 return $password;
};