<?php

/*

Shehab-Habila

Bubble sort
--------------

*/

$values = array(15, 6, 2, 80, 4, 18, 5, 0, 0.12, 0.1); // 11 values
$valuesNum = count($values);
$start = 0;
$end = $start+1;
$cycles = 0;
$maxCycles = $valuesNum-1;
$maxEnd = $maxCycles-$cycles;

echo "UnSorted: <br>";
print_r($values);
echo "<br><br><br>";

/*echo "Sorting:<br>";*/
while($maxEnd > 0){
    while($end <= $maxEnd){
        $firstValue = $values[$start];
        $secondValue = $values[$end];
        if($firstValue > $secondValue){
            unset($values[$start]);
            array_splice($values, $end, 0, $firstValue );
            /*
            echo "firstValue: $firstValue <br> secondValue: $secondValue <br>";
            print_r($values);
            echo "<br><br>";
            */
        }
        $end++;
        $start++;
    }
    $maxEnd--;
    $end = 1;
    $start = 0;
}

echo "<br><br>Sorted: <br>";
print_r($values);






