<?php

function wordTonu ($word){


    $wordArray = explode(";",$word);

    $result = ""; 

    foreach($wordArray as $value){
        switch (trim($value)){
            case "zero":
                $result .= "0";
                break;
            case "one":
                $result .= "1";
                break;
            case "two":
                $result .= "2";
                break;
            case "three":
                $result .= "3";
                break;
            case "four":
                $result .= "4";
                break;
            case "five":
                $result .= "5";
                break;
            case "six":
                $result .= "6";
                break;
            case "seven":
                $result .= "7";
                break;
            case "eight":
                $result .= "8";
                break;
            case "nine":
                $result .= "9";
                break;
            default:
                $result .= " ";
                break;
        }
    }

    return $result;

}




echo wordTonu("zero;one;two;three;four;five;six;seven;eight;nine");



?>