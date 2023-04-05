<?php

$email=$_REQUEST['user_email'];
$password=$_REQUEST['user_pass'];

if(strpos($email,'@') && strpos($email, '.com')){
    echo "Email is OK" .'<br>';
}else{
    echo "Enter a valid email id" .'<br>';
}

$passLength=strlen($password);
if($passLength>=6){
    if($passLength<=8){
        echo "Password is Perfect" ;
    }else{
        echo "WRONG! too long password";
    }
}else{
    echo "Too short password! minimum 6 to 8";
}