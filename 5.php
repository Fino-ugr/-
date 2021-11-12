<?php
// Работа с файлами

require __DIR__ . '/functions.php';

if (!isUser()){
    header('Location: /0/i.php');
    exit;
}

$b = $_POST['oper1'];

if ($b == 'yes')
{
if (!unlink('plateji.txt')) echo "Удаление невозмлжно";
else echo "Файл 'plateji.txt' удален успешно";
}

else if ($b == 'no') echo "Файл 'plateji.txt' оставлен на своем месте";

echo "<br>";
echo "это массив POST";
var_dump($_POST);
?>