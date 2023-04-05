<?php
$number=$_REQUEST['input_number'];
$result=1;
for($i=1; $i<=$number; $i++)
{
    $result=$result*$i;
}
echo $result;