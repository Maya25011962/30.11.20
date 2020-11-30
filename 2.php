<!DOCTYPE HTML>
<html>
<head>
    <title>урок 7</title>
</head>
<body>
<h2>работа над if</h2>

<?php

$a = 7;
$b = 20;
$c = 120;

    if ($a >$b and $a >$c)
      if ($b >$c)
        echo " числа в порядке возрастания от меньшего к большему $c , $b , $a";
    if ($a >$c and $a >$b)
      if ($c >$b)
        echo " числа в порядке возрастания от меньшего к большему $b , $c , $a";
    if ($b >$a and $b >$c)
      if ($a >$c)
        echo " числа в порядке возрастания от меньшего к большему $c , $a , $b";
    if ($b >$c and $b >$a)
      if ($c >$a)
        echo " числа в порядке возрастания от меньшего к большему $a , $c , $b";
    if ($c >$a and $c >$b)
    if ($a >$b)
        echo " числа в порядке возрастания от меньшего к большему $b , $a , $c";
    if ($c >$b and $c >$a)
      if ($b >$a)
        echo " числа в порядке возрастания от меньшего к большему $a , $b , $c";

?>
<?php
$page="2.php";
if (strpos ($page, 2, 0)=== true)
    echo $page;
if($put):
    ?>
    <ul>
        <li><a href="/1.php">1.php</a></li>
        <li><a href="/$page">2.php</a></li>
        <li><a href="/3.php">3.php</a></li>
    </ul>
<?php else: ?>
    <ul>
        <li><a href="1.php">файл 1</a></li>
        <li><b><a href="2.php">файл 2</a></b></li>
        <li><a href="3.php">файл 3</a></li>
    </ul>
<?php endif ?>
