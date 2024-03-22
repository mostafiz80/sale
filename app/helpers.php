<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('personal_calculator')){
    function personal_calculator(int $first, string $second, int $third){
        switch($second) {
            case '+':
                $result = $first + $third;
                break;
            case '-':
                $result = $first - $third;
                break;
            case '*':
                $result = $first * $third;
                break;
            case '/':
                if ($y == 0) {
                    $result = "&#8734";
                } else {
                    $result = $first / $third;
                }
        }
        return $result;

    }
}