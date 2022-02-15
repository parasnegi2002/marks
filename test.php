<?php
$p = readline();
switch ($p){
    case $p<40:
        echo "fail";
        break;
    case ($p>40&&$p<70):
        echo "D";
        break;
    case ($p>90&&$p<101):
        echo "A";
        break;
    case ($p>80&&$p<91):
        echo "B";
        break;
    case ($p>69&&$p<80):
        echo "C";
        break;  
    default:

    echo "enter between 0 - 100";
}         
?>