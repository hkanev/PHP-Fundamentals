<?php
 $number = 1234;

 if($number>1000){
     $number = 999;
 }

 if($number<102){
     echo "no";
 }

 for($i=100; $i<= $number; $i++){
        $sto = $i%10;
        $des = $i/10%10;
        $ed = intval($i/100);

     if($sto != $des && $sto != $ed && $ed != $des){
         echo $i." ";
     }
 }
