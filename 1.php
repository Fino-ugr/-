<?php

$mysqli = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * FROM user";
$result = mysqli_query($mysqli, $query);

while ($user = mysqli_fetch_assoc($result)) {
    var_dump($user); echo "<br>";
}                      
//return isset($users[[$login]) && $pass == $users[$login];
//var_dump($user);
?>