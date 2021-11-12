<html>
<head>
<title>Галерея изображений</title>
</head>
<body>
<h2>Какое-то описание картинки</h2>
<?php

require __DIR__ . '/functions.php';

if (!isUser()){
    header('Location: /0/i.php');
    exit;
}

for($i = 1; $i <= 6; $i++)
echo "<a href = photo.php?id=$i >Картинка №$i</a><br/>";
?>
</body>
</html>