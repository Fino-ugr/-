<?php

function CheckLoginPassword($login, $pass){
    $mysqli = mysqli_connect("localhost", "root", "", "test");
    $query = "SELECT * FROM user";
    $result = mysqli_query($mysqli, $query);

while ($user = mysqli_fetch_assoc($result)) {
    if ($login == $user['login']) {
        if (password_verify($pass, $user['pass'])) { 
            return true; }
    }
    //mysqli_close($mysqli);
}                      
    
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
