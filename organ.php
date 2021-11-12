<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#F3E2A9">
   
   <p><font size="5" color="red" face="Arial">ОРГАНАЙЗЕР</font> для записи ДЕЛ и контроля.</p>
   
<?php
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "test");
$result = mysqli_query($link, "SELECT * FROM delo");
//mysqli_store_result($link);
$del = mysqli_num_rows($result);
echo "На данный момент на контроле: $del дел";
mysqli_close($link);
?>
   <table border="1"
           style="border: 15px;">
                   <br>
                   <tr>
                                
                   <th> 
<?php
    $mysqli = mysqli_connect("localhost", "root", "", "test");
    $query = "SELECT * FROM delo";
    $result = mysqli_query($mysqli, $query);
    while ($delo = mysqli_fetch_assoc($result)) {
           echo "<br>" . $delo['delo'];
           }      
           mysqli_close($mysqli);
?>
<br> </th>

<th>
<?php 
        $mysqli = mysqli_connect("localhost", "root", "", "test");
        $query = "SELECT * FROM delo";
        $result = mysqli_query($mysqli, $query);
        while ($delo = mysqli_fetch_assoc($result)) {
               echo "<br>" . $delo['dt'];
            }      
            mysqli_close($mysqli);
?>
</th>

</tr>
                   
    </table>

    <h2>Список намеченных дел:</h2>
    <form action="/0/delo.php" method="POST">
        Введите новое дело:
           
           <textarea name="delo" id="" cols="30" rows="5">...</textarea>
        Установите дату исполнения:
           <input type="date" name="dt">
           <input type="submit">
    </form>
  
</body>
</html>