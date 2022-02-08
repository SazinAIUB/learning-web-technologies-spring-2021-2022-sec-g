<?php
function check($number){
    if($number % 2 == 0){
        echo $number." is an Even Number";
    }
    else{
        echo $number." is an Odd Number";
    }
}

$number = 38;
check($number)
?>
