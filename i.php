<?php
session_start();
if (!empty ($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset ($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html>
    <head>
<title>  Сайт </title>
<meta charset="utf-8">
<meta name="Saransk">
<meta http-equiv="Content-Type" content="text/html">
    </head>

    <body bgcolor="#000" background="img/5333978.jpg">    
    
        <table 
        border="1"
        bgcolor="#FBEEC1"
        cellpadding="15"
        style="width:100%; border: radius 10px; color: #900000;">

<th> <h2> ГОРОД С А Р А Н С К<h2> 
<h5><?php 
//echo "Текущее время:" . time();  
//echo date("l F jS, Y - g:ia", time());
echo date(DATE_COOKIE, time());
echo "<br>";
//echo date(DATE_W3C, time());
//echo "<br>";
//echo date(DATE_RSS, time());
?>
</h5>
</th>
<?php
// Счетчик посещений
if (isset($_COOKIE['counter'])){
    $counter = ++$_COOKIE['counter'];
}
    else {
        $counter = 1;
    }
setcookie('counter', $counter, time() + 86400);
?>
Посещений: <?php echo $counter; ?>
        </table>    
<table
        border="1"
        bgcolor="#8D8741"
        cellpadding="15"
        style="width:100%; border-radius:5px; color: #fff;">
    <tr>    
    <td> 
    <img src="img/sar3.jpg" alt="Картинка" width="325" height="305"/>
<table>
<tr><h2>Здравствуйте Гость!</h2> </tr>
<tr><h3>пройдите авторизацию</h3> </tr>
<tr>
<form action="/0/login.php" method="POST">
Введите Ваше имя :
   <input type="text" name="login">
Введите пароль:
   <input type="password" name="pass">
Запомнить
<select type="text" name="save">
            <option value="yes"> да </option>
            <option value="no"> нет </option> 
        </select>
<input type="submit">
</form>
</tr>
</table>
    </td>
    <td> ...................................................................................................................................................................
    <form action="/0/poisk.php" method="POST">
Поиск:
   <input type="text" name="pole">
    <input type="submit">
    </form>
         ...................................................................................................................................................................
    </td>
    <td> ...................................................................................................................................................................
    
    <form action="/0/koment.php" method="POST">
        <p>Обратная связь</p>
        <textarea name="comments" id="" cols="30" rows="5">Введите Ваш комментарий... </textarea>
        <input type="submit">
        </form>
         ...................................................................................................................................................................
    </td>
<br>
</tr>    

<tr>
<td>
    <table>
<tr>
    <h4>Если Вы не зарегистрированы, 
    пройдите регистрацию:</h4> 
</tr>

<tr><form action="/0/reg.php" method="POST">
    Введите Ваше имя :
   <input type="text" name="login">
    Придумайте пароль:
   <input type="password" name="pass">
    Укажите адрес Вашей электронной почты:
    <input type="e-mail" name="e-mail">
    
     Зарегистрировать Вас?
     <select type="text" name="save">
            <option value="yes"> да </option>
            <option value="no"> нет </option>
     </select>
     <input type="submit">
          </form>
</tr>
    </table>
    </td>
    <td>
         ...................................................................................................................................................................
         ...................................................................................................................................................................
         ...................................................................................................................................................................
    </td>
    <td>

         ...................................................................................................................................................................
         ...................................................................................................................................................................
         ...................................................................................................................................................................
    </td>
</tr>
</table>
<br>
<br>

<?php
//var_dump($_COOKIE);
//echo "In good the trust";
$us = fopen("user.txt", 'a+') or die("Создать файл не удалось");
$users = fread($us, 1000);
fclose($us);
echo "<br>";

?>
</body>
</html>
