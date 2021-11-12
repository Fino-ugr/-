<?php
session_start(); // Стартует новую сессию, либо возобновляет существующую
unset($_SESSION['login']);
session_destroy(); // Закрывает сессию
setcookie('auth', '', time() - 86400); // убираем куку
setcookie('user_save', '', time() - 86400); // убираем куку

header('Location: /0/i.php');
exit;


?>