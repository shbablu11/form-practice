<?php

$input=$_REQUEST['input_number'];

if($input<0){
    if($input%2==0){
        echo "$input is Even and a Neg number";
    }else{
        echo "$input is Odd and a Neg number";
    }
    
}elseif($input==0){
    echo "$input is Nutral number";

}elseif($input>0){
    if($input%2==0){
        echo "$input is Even and a Pos number";
    }else{
        echo "$input is Odd and a Pos number";
    }
}