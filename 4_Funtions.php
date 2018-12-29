<?php
function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is : $sum";
}

addFunction(10, 20);


function addFive($num)
{
    $num += 5;
}

function addSix(&$num)
{
    $num += 6;
}

$orignum = 10;
addFive($orignum);

echo "Original Value is $orignum<br />";

addSix($orignum);
echo "Original Value is $orignum<br />";
?>