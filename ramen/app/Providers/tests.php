<?php

use PhpParser\Node\Stmt\While_;

$number = 5;
do{

    if($number<=0){

        echo $number;
        break ;
    }else{
        echo "nhap lai";
    }
}While($number<=0);

?>
