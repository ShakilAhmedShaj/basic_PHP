<?php

$num1 = 20;
$num2 = 30;
$sum = $num1 + $num2;

$str1 = 'Hello';
$str2 = 'SHAJ';
$str3 = 'They\'re Here';
$str4 = "They're Here";

$greet = $str1.' '.$str2.'!';

$greet2 = "$str1 $str2";

define('GREETING','HELLO EVERYONE');
// define('GREETING','HELLO EVERYONE', true);




echo $sum;
echo $greet;
echo $greet2;
echo $str3;
echo $str4;
echo GREETING;


?>