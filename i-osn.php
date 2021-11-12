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
<td>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style type="text/css">
body {
    color: purple;
    background-color: #d8da3d }

/* календарь */
table.calendar    { border-left:1px solid #999; }
tr.calendar-row  {  }
td.calendar-day  { min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
td.calendar-day:hover  { background:#eceff5; }
td.calendar-day-np  { background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number    { background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
</style>


</head>
<body>

<?php 
    /* Функция генерации календаря */
    function draw_calendar($month,$year){
      /* Начало таблицы */
      $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';
      /* Заглавия в таблице */
      $headings = array('Понедельник','Вторник','Среда','Четверг','Пятница','Субота','Воскресенье');
      $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
      /* необходимые переменные дней и недель... */
      $running_day = date('w',mktime(0,0,0,$month,1,$year));
      $running_day = $running_day - 1;
      $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
      $days_in_this_week = 1;
      $day_counter = 0;
      $dates_array = array();
      /* первая строка календаря */
      $calendar.= '<tr class="calendar-row">';
      /* вывод пустых ячеек в сетке календаря */
      for($x = 0; $x < $running_day; $x++):
        $calendar.= '<td class="calendar-day-np"> </td>';
        $days_in_this_week++;
      endfor;
      /* дошли до чисел, будем их писать в первую строку */
      for($list_day = 1; $list_day <= $days_in_month; $list_day++):
        $calendar.= '<td class="calendar-day">';
          /* Пишем номер в ячейку */
          $calendar.= '<div class="day-number">'.$list_day.'</div>';
          /** ЗДЕСЬ МОЖНО СДЕЛАТЬ MySQL ЗАПРОС К БАЗЕ ДАННЫХ! ЕСЛИ НАЙДЕНО СОВПАДЕНИЕ ДАТЫ СОБЫТИЯ С ТЕКУЩЕЙ - ВЫВОДИМ! **/
          $calendar.= str_repeat('<p> </p>',2);
          
        $calendar.= '</td>';
        if($running_day == 6):
          $calendar.= '</tr>';
          if(($day_counter+1) != $days_in_month):
            $calendar.= '<tr class="calendar-row">';
          endif;
          $running_day = -1;
          $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter++;
      endfor;
      /* Выводим пустые ячейки в конце последней недели */
      if($days_in_this_week < 8):
        for($x = 1; $x <= (8 - $days_in_this_week); $x++):
          $calendar.= '<td class="calendar-day-np"> </td>';
        endfor;
      endif;
      /* Закрываем последнюю строку */
      $calendar.= '</tr>';
      /* Закрываем таблицу */
      $calendar.= '</table>';
      
      /* Все сделано, возвращаем результат */
      return $calendar;
    }
    /* СПОСОБ ПРИМЕНЕНИЯ */
    echo '<h2>Ноябрь 2021</h2>';
    echo draw_calendar(11,2021);
    ?>
    <table>
        <tr>
            <td>
<form method="LINK" action="organ.php">
    <input type="submit" value="Органайзер">
</form>
            </td>
        </tr>
</table>

</body>
</html>
</td>

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

<table>
<tr>
<td>
<form method="LINK" action="1.html">
    <input type="submit" value="Вариант 1">
</form>
</td>
<td>
<form method="LINK" action="index.php">
    <input type="submit" value="Вариант 2">
</form>
</td>
<td>
<form method="LINK" action="galery1.php">
    <input type="submit" value="Галерея">
</form>
</td>
<td>
    <form method="LINK" action="4.html">
    <input type="submit" value="Оплата ресурсов">
</form>
</td>
</tr>
-----------------------------------------------------------------------------------------------
<tr>
<td> 
<form method="LINK" action="Education1.html">
    <input type="submit" value="Калькулятор">
</form>
</td>
<td>
<form method="LINK" action="https://adm-saransk.ru">
    <input type="submit" value="Администрация города Саранска">
</form>
</td>
<td>
<form method="LINK" action="primer.html">
    <input type="submit" value="Пример кода">
</form>
</td>

</tr>
</table>

<br>
<br>
<br>

<form method="get" action="page1.html">
    <button type="submit">Можно и так</button>
</form>

<table border="1"
cellpadding="10"
style="border-radius:10px;">
<tr>
<th>
<form action="files/zagruzka.php" method="post", enctype="multipart/form-data">
    <p> Загрузить файл на СЕРВЕР </p>
    <input type="file" name="filename" size="15"> </br>
    <input type="submit" value="Загрузить">
</form>
</th>
</tr>
</table>


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
