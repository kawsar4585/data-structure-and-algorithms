<?php
$array = [1,3,5,6,7];
$n = count($array);
$sum = 0;
for ($i = 0; $i <=$n-1; $i ++) {
    echo "index number is : ".$i." and value is ".$array[$i]."\n";
    $sum += $array[$i];
}
echo "sum is: ".$sum;

// time complexity is 0(n) becouse we have to traverse the whole array to get the sum of all elements.

// space complexit is 0(1) becouse we are using only one variable to store the sum of all elements.