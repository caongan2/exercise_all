<?php

function maxArr($arr) {
    $max = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    } return $max;
}
$arr = [[1,2],[2, 3], [4,1], [1,5], [0,43],[1,3], [21,1000],[ 12,3]];
echo maxArr($arr);
echo '<br>';
echo "Verson: " . phpversion();