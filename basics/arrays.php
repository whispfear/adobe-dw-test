<?php

function summation($values){
    $sum = 0;
    foreach($values as $value){
        $sum += $value;
    }
    return $sum;
}

$how_many = intval(readline("How many numbers do you want to add ? "));

$values = array();
for($i = 0; $i < $how_many; $i++){
    array_push($values, intval(readline("" . ($i + 1) . " > " )));
}

$sum = summation($values);
print "Sum of values is " . $sum . "\n";

?>
