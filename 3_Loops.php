<?php


$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}


$i = 0;
$num = 0;

do {
    $i++;
} while ($i < 10);
echo ("Loop stopped at i = $i");

$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
    echo "Value is $value <br />";
}
?>