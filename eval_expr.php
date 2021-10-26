<?php

function eval_expr(string $expr){

    $length = strlen($expr);

    $operatorArray = array(
                        "+" => 2,
                        "-" => 2,
                        "*" => 3,
                        "/" => 3,
                        "%" => 3);

    $numberArray = [];
    $operatorArray = [];

    for ($i=0; $i < $length ; $i++) { 

        $caracteres = substr($expr, $i, 1);
        
        if(is_numeric($caracteres)){
            array_push($numberArray, $caracteres);
        }
        else{

            array_push($operatorArray, $caracteres);
        };
    }

    print_r($numberArray);
    print_r($operatorArray);

}

eval_expr("(3+1)*3+4");
?>