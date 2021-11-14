<?php
session_start();
require __DIR__ . '/functions1.php';
if (!isUser()){
    header('Location: /0/i.php');
    exit;
}
echo 'Hello, Images!   ';
//$dir  = 'd:\xampp\htdocs\0\images';
$mysqli = mysqli_connect("localhost", "root", "", "test");
//mysqli_select_db($link, 'test');

$query = "SELECT * FROM images";
$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_row($result)) {
    ?>
   
    <li><img src="<?php echo $row[2]?>">
    <br>
    Название рисунка: <?php echo $row[1]; ?>

<?php

}


//////////////////////////////////////////////////////////////////////////////////////////////
/*$dir = __DIR__ . '\images';
$files = scandir($dir);
var_dump($files);
if ($files !== false) 
{
foreach(($files) as $f) {
if ($f == '..' || $f == '.') {continue;}
?>
<li><img src="<?php echo 'http://localhost/0/images/'.$f ?> "alt=" <?php echo $f ?> " title="">
<?php
}
} 

//Загрузка файла изображения
echo <<<_END
<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
<form method='post' action='galery.php' enctype='multipart/form-data'>
Выберите файл с расширением JPG, GIF, PNG или TIF:
<input type='file' name='filename' size='10'>
<input type='submit' value='Загрузить'></form>
_END;

/////////////////////////////
// Загрузка файла на СЕРВЕР//
/////////////////////////////
if ($_FILES)
{
$name = $_FILES['filename']['name'];
switch($_FILES['filename']['type'])
{
case 'image/jpeg': $ext = 'jpg'; break;
case 'image/gif': $ext = 'gif'; break;
case 'image/png': $ext = 'png'; break;
case 'image/tiff': $ext = 'tif'; break;
default: $ext = ''; break;
}
if ($ext)
{
$n = "image.$ext";
move_uploaded_file($_FILES['filename']['tmp_name'], $n);
echo "Загружено изображение '$name' под именем '$n':<br>";
echo "<img src='$n'>";
}
else echo "'$name' — неприемлемый файл изображения";
}
else echo "Загрузки изображения не произошло";
echo "</body></html>";*/
//<li><img src="d:\xampp\htdocs\0\images\1.jpg">
?>
<br>
<br>
<table border="1"
cellpadding="10"
style="border-radius:10px;">
<tr>
<th>
<form action="files/zagr-foto.php" method="post", enctype="multipart/form-data">
    <p> Загрузить файл на СЕРВЕР </p>
        Введите название изображения:
    <input type="text" name="nm">
        Выберете файл:
    <input type="file" name="filename" size="15"> </br>
    <input type="submit" value="Загрузить">
</form>
</th>
</tr>
</table>
