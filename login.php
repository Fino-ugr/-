<?php 

session_start(); // Стартует новую сессию, либо возобновляет существующую, 
// но ВСЁ это только для конкретного пользователя!
// размещается до любого вывода на экран

$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['save'] = $_POST['save'];

$login = $_POST['login'];
$pass = $_POST['pass'];

require __DIR__ . '/functions1.php';

// И начали работать с данными, введенными пользователем

if (empty($_POST['login']) || empty($_POST['pass']))  
{
    $_SESSION['error'] = ' Вы не ввели имя пользователя или пароль!';
    header('Location: /0/i.php');
    exit;
}

if (!CheckLoginPassword ($login, $pass))
    {
        $_SESSION['error'] = ' Вы не авторизованы, имя пользователя или пароль введены не верно!';
        header('Location: /0/i.php');
    exit;
    }     

login($login);
header('Location: /0/i-osn.php');
exit;

   // var_dump($_SESSION);
?>

