<?php
$id = $_GET['id']; // Считываем передаваемый параметр
?>
<html>
<head>
<title>Просмотр картинки № <?php echo $id;?></title>
</head>
<body>
<img src="img/<?php echo $id;?>.jpg" width="500"/>
<img src="img/5.jpg" width="500"/>
<h2>Какое-то описание картинки</h2>
</body>
</html>