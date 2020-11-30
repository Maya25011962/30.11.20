<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>
<?php

$int =0;

if ($int >= 0)
echo " число $int положительное";
else
    echo " число $int врядли положительное...";
?>
<?php
$page="1.php";
if (strpos ($page, 1, 0)=== true)
    echo $page;
if($put):
   ?>
    <ul>
        <li><a href="/$page">1.php</a></li>
        <li><a href="/2.php">2.php</a></li>
        <li><a href="/3.php">3.php</a></li>
    </ul>
<?php else: ?>
    <ul>
        <li><b><a href="1.php">файл 1</a></b></li>
        <li><a href="2.php">файл 2</a></li>
        <li><a href="3.php">файл 3</a></li>
    </ul>
<?php endif ?>