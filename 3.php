<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>


<?php

$a = -70;
$b = 20;

if ($a >=0 and $b>=0 ){
 $c=$b + $a;
     echo "сумма переменных а и в равна $c ";}
if ($a >=0 and $b<0 ){
    $c=$a - $b;
    echo "разница переменных а и b равна $c ";}
if ($b >=0 and $a<0 ){
    $c=$b - $a;
    echo "разница переменных b и a равна $c ";}

?>
<?php
$page="3.php";
if (strpos ($page, 3, 0)=== true)
    echo $page;
if($put):
    ?>
    <ul>
        <li><a href="/1.php">1.php</a></li>
        <li><a href="/2.php">2.php</a></li>
        <li><a href="/$page">3.php</a></li>
    </ul>
<?php else: ?>
    <ul>
        <li><a href="1.php">файл 1</a></li>
        <li><a href="2.php">файл 2</a></li>
        <li><b><a href="3.php">файл 3</a></b></li>
    </ul>
<?php endif ?>
