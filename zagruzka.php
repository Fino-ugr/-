<?php

var_dump($_FILES);

if ($_FILES)
{
$name = $_FILES['filename']['name'];
move_uploaded_file($_FILES['filename']['tmp_name'], $name);
echo "Загружаемое изображение '$name'<br><img src='$name'>";
}

?>
