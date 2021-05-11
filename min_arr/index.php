<?php
 function minArr($arr) {
     $min = $arr[0];
     for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
     }
     return $min;
 }
 $arr = [1,2,3,4,5];
 echo minArr($arr);