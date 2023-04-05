<?php
//multiple number table


$nums=$_REQUEST['numbers'];

for($i=1; $i<=$nums; $i++){
    for($j=1; $j<=10; $j++){
        echo "$i*$j= ".$i*$j. "<br>" ;
    }

}