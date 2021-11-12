<?php
// Работа с файлами

require __DIR__ . '/functions.php';

if (!isUser()){
    header('Location: /0/i.php');
    exit;
}

$fh = fopen("plateji.txt", 'a+') or die("Создать файл не удалось");
$text = " в " . $_POST['mes'];
$text1 = " = " . $_POST['sum'];

// Запись в файл
fwrite($fh, $text) or die("Сбой записи файла");
fwrite($fh, $text1) or die("Сбой записи файла");
fclose($fh);
echo "Файл 'plateji.txt' записан успешно ";
/*echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;*/
// Чтение из файла

echo "<br>";

$fr = fopen("plateji.txt", 'r') or die("Открыть файл не удалось");
$money = fread($fr, 100000000);
echo "Расходы на оплату ресурсов:" . $money;
fclose($fr);
?>