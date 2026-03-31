<?php
// solution 1:
// insert an element at the beginning of the array

// Algorithm:
   // 1. move all elements one position to the right
   // 2. insert the new element at the beginning of the array

// $array = [1,3,4,5];
// echo "before insertion: \n";
// print_r($array);
// $insertElement = 2;
// $n = count($array);
// // move all elements one position to the right
// for ($i = $n-1; $i >=0; $i --) {
//     echo "moving element at index ".$i." to index ".($i+1)."\n";
//     $array[$i+1] = $array[$i];
//     echo "array after moving element at index ".$i." to index ".($i+1).": \n";
//     print_r($array);
// }
// // insert the new element at the beginning of the array
// $array[0] = $insertElement;
// $n++;
// print_r($array);


// solution 2:
// insert an element at the beginning of the array
// Algorithm:
    // 1. create a new array with the new element at the beginning
    // 2. copy all elements from the old array to the new array


// $array = [1,4,5,6];
// echo "before insertion: \n";
// print_r($array);
// $insertElement = 2;
// $n = count($array);
// // create a new array with the new element at the beginning
// $newArray = [$insertElement];
// echo "new array after inserting element at the beginning: \n";
// print_r($newArray);
// // copy all elements from the old array to the new array
// for ($i = 0; $i < $n; $i ++) {
//     echo "copying element at index ".$i." to new array\n";
//     $newArray[] = $array[$i];
//     echo "new array after copying element at index ".$i.": \n";
//     print_r($newArray);
// }



// solution 1 has time complexity of 0(n) because we have to move all elements one position to the right and insert the new element at the beginning of the array. 

// solution 2 has time complexity of 0(n) becouse we have to copy all elements from the old array to the new array.

// space complexity of solution 1 is 0(1) and solution 2 is 0(n)

// the better solution is solution 1 because it has less space complexity than solution 2.


// insert an element at the end of the array
// $array = [1,2,3,4];
// $insertElement = 5;
// $array[] = $insertElement;
// print_r($array);


// insert an element at a specific position in the array

$array = [1,2,3,4,5];
$insertElement = 6;
$insertPosition = 2;
$n=0;
foreach ($array as $num){
    $n++;
}

for ($i = $n-1; $i >= $insertPosition-1; $i--){
    $array[$i+1] = $array[$i];
}
$array[$insertPosition-1] = $insertElement;
print_r($array);