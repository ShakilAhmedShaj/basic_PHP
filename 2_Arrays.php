<?php


//Indexed

$people = array('Rahim','Karim','Abul');

$ids = array(10,20,30,40);

$cars = ['Honda','Toyota','Ford'];

$cars[3] = 'BMW';
$cars[] = 'Walton';


echo $people[0];
echo $people[1];
echo $people[2];

echo $ids[0];
echo $cars[4];

echo count($cars);

print_r($cars);
var_dump($cars);











?>