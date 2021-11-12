<?php

function CheckLoginPassword($users, $login, $pass){
   
    return isset($users[$login]) && $pass == $users[$login];
}

function login($login)
{
    setcookie('auth', $login, time() + 86400);
}

function isUser()
{
    return isset($_COOKIE['auth']);
}

function getUser()
{
    return $_COOKIE['auth'];
}


?>
