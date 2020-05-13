<?php
function sum($a,$b){
    return $a + $b;
}

function testSum($res,$a,$b){
    if($res == sum($a,$b)){
        return "ok";
    }
}

testSum(3,1,2);
testSum(-3,-1,-2);