<?php
/*
$x= 1;

while($x <= 15){
    echo "#$x".PHP_EOL;
    $x++;
}*/
for($x=1;$x<=15;$x++){

    if($x == 13){
        continue;
        //break;
    }
    echo "#$x".PHP_EOL;
}