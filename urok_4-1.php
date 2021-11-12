Результат:
<?php
//echo $_GET['id'];
//var_dump($_GET);
//var_dump($_POST);

//echo $_POST['first'];
//echo $_POST['oper'];
//echo $_POST['two'];

echo "<br>";

// Калькулятор

$a = $_POST['first'];
$b = $_POST['oper'];
$o = $_POST['two'];

//echo $a, $b, $o;

if ($b == '+'){
    $res = $a + $o;
    echo " $a + $o = " . $res;
}
elseif ($b == '-'){
    $res = $a - $o;
    echo " $a - $o= " . $res;
}
elseif ($b == '*'){
    $res = $a * $o;
    echo " $a * $o= " . $res;
}
elseif ($b == '/' and $o ==0){
    echo " Ошибка: деление на НОЛЬ невозможно!";
}  
elseif ($b == '/' and $o != 0){
    $res = $a / $o;
    echo " $a / $o= " . $res;
}
// echo 'Здравствуй, ' . $_POST['login'];
?>
