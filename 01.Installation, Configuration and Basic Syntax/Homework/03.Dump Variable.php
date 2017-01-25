<?php
 //$input = "hello";
 $input = 2;

 if(is_numeric($input)){
     var_dump($input);
 } else {
     echo  gettype($input);
 }