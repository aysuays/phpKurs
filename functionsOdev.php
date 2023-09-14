<?php

$fib = 10;

function fib($num){
    if($num==0)
        return 0;
    if($num==1)
        return 1;
    else
    {
        return (fib($num-1) + fib($num-2));
    }
}

for ($i = 0; $i < $fib; $i++){
    echo fib($i);
    echo "\n";
}

