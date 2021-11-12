<?php

require __DIR__ . '/functions.php';
session_start(); // Стартует новую сессию, либо возобновляет существующую

$save = $_SESSION['save'];
if ($save == 'yes'){
    setcookie('user_save', $save, time() + 86400);
}
    else {header('Location: /0/i.php');}
    
// Счётчик посещений
if (isset($_COOKIE['counter'])){
    $counter = ++$_COOKIE['counter'];
}
    else {
        $counter = 1;
    }
setcookie('counter', $counter, time() + 86400);

if (!isUser()){
    header('Location: /0/i.php');
    exit;
}
?>
Посещений: <?php echo $counter; ?>
<!DOCTYPE html>
<html>
    <head>
<title>  Сайт </title>
<meta charset="utf-8">
<meta name="PROBA">
<meta http-equiv="Content-Type" content="text/html">
<style>
   body {
    background: #c7b39b url(/1.jpg); /* Цвет фона и путь к файлу */
    color: #fff; /* Цвет текста */
   }
    </style>
    </head>
<body>    
<br>  
<table border="1"
cellpadding="10"
style="border-radius:10px;">
<tr> <th><img src="img/sar2.jpg" alt="Картинка" title="Картинка" width="210" height="210"/>
<br>
    Здравствуйте <?php echo $_SESSION['login'] . "!"; echo "<br>";?>
    Ваш ID = <?php echo $_COOKIE['PHPSESSID']?>
    <br>
    <a href="logout.php"> Выход </a> <br>
    </th>
</tr>
</table> 
        <h1>ЗАНИМАТЕЛЬНАЯ КУЛИНАРИЯ</h1>

<h2> Рецепт супа </h2>  
  <ul>
    <li>Купите мясо в магазине.</li>
    <li>Помойте мясо и положите в кастрюлю.</li>
        <ul>
            <li> Обрежьте шкуру</li>
            <li> Порежьте на небольшие кусочки</li>
        </ul>
    <li>Налейте в кастрюлю воды и варите до готовности</li>
</ul>

<table border="1" style="border-radius:15px;">
<tr><th><a href="1.html" class="floating-button"> Вариант 1 </a> <br> </th></tr>
<tr><th><a href="index.php"> Вариант 2 </a> <br> </th></tr>
<tr><th><a href="galery1.php"> Галерея </a> <br> </th></tr>
<tr><th><a href="4.html"> Оплата ресурсов (Газ, Электроэнергия, Вода, Канализация, Вывоз мусора) </a> <br> </th></tr>
<tr><th><a href="Education1.html"> Калькулятор </a> <br></th></tr>
<tr><th><a href="https://adm-saransk.ru"> Администрация города </a> <br></th></tr>
<tr><th><a href="primer.html"> Пример кода </a> <br></th></tr>
<tr><th><a href="organ.php"> Органайзер </a> <br></th></tr>
</table>

<form method="LINK" action="http://codehelper.ru">
    <input type="submit" value="Go to CodeHelper!">
</form>

<br>
<?php //echo "Текущее время:" . time();  
echo date("l F jS, Y - g:ia", time());
?>
<br>
<?php
$ss_id = $_COOKIE['PHPSESSID'];
echo "это номер сессии из КУК:" . $ss_id;
echo "<br>";
echo "это массив КУКИ:";
var_dump($_COOKIE); // Выводит все КУКИ, установленные для этого пользователя
echo "<br>";
echo "это массив СЕССИИ:";
var_dump($_SESSION); // Выводит все СЕССИИ, открытые для этого пользователя
echo "<br>";
echo "<br>";

echo "это массив POST";

var_dump($_POST);
echo "<br>";
print_r($ss_id);

/*if (isset($_COOKIE['login'])){
    echo "Я установил тебе КУКИ:";
    echo $_COOKIE['login']; 
    echo ", ";
    echo $_COOKIE['counter'];    

}
    else {
    echo "скоро поставлю тебе КУКУ";    
    }
*/

?>
</body>
</html>
