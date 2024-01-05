<?php
function square($a,$b){
    return $a*$b;
}
function triangle($a,$b){
    return $a*$b/2;
}
function trapezoid($a,$b,$c){
    return ($a+$c)*$b/2;
}
echo square(5,5)."\n";
echo triangle(7,8)."\n";
echo trapezoid(4,5,4);