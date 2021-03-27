<?php
    $logged = TRUE;
    if($logged){
         echo 'you are in<br>';
    }else{
        echo 'you are not<br>';
    }

    //using shorthand
    
    echo ($logged) ? 'you are in': 'you are not in';

   //using nested if
   $age = 5;
   $score = 55;
   echo ($score>50 ?($age<10 ?'babyclass':'middleclass'):($age>10 ? 'lower':'upper'));
?>