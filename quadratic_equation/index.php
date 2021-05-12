<?php
include_once "QuadraticEquation.php";

$a = 1;
$b = 2;
$c = 1;

$quadratic = new QuadraticEquation($a, $b, $c);
$delta = $quadratic->getDelta();
if($delta < 0) {
    echo "vo sinh";
} elseif ($delta == 0) {
    echo "1 nghiem kep: " . $quadratic->getRoot();
} else {
    echo "2 nghiem: " . $quadratic->getRoot2() ." and ". $quadratic->getRoot();
}