<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$t = "hello world";
echo strlen($t);

echo strrev("Hello world!"); 

$array = array('Hello', 'world!');
echo implode(" ", $array);

echo trim("  Hello world!  ");


echo strtoupper("hello world!"); 

echo strtolower("HELLO WORLD!"); 



?>


</body>
</html>
